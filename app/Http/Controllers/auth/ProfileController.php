<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\Location;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $provinces = Location::where('parent_id', 0)->get();

        return view('page.profile.profile', [
            'title' => 'Profil',
            'provinces' => $provinces
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $validate = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'nullable|min:5|max:255',
            'phone_number' => 'required|numeric',
            'address' => 'required',
        ]);

        if ($validate['password'] === null) {
            $password = $user->password;
        } else {
            $password = Hash::make($validate['password']);
        }

        $validate['password'] = $password;
        $validate['location_id'] = $request->city === null ? $user->location_id : $request->city;

        $user->fill($validate);
        $user->save();

        return redirect('/profile')->with('success', 'Profile successfully updated!');
    }

    public function cities($parent_id)
    {
        $cities = Location::where('parent_id', $parent_id)->get();

        return $cities;
    }

    public function transaction_list()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->orderBy('date', 'DESC')->get();

        $transactions->transform(fn ($item) => [
            'date' => Carbon::createFromFormat('Y-m-d', $item->date)->format('d F Y'),
            'detail' => json_decode($item->detail),
            'seller' => $item->seller_id,
        ]);


        return view('page.profile.transaction_list', [
            'title' => 'Daftar Transaksi',
            'transactions' => $transactions
        ]);
    }

    public function download_blueprint(Request $request)
    {
        $author = User::find($request->seller_id);

        $file = public_path() . "/designs/{$author->username}/{$request->design_name}/{$request->blueprint}";

        $headers = array('Content-Type: application/pdf');

        return response()->download($file, $request->blueprint, $headers);
    }

    public function dashboard()
    {
        $transactions = Transaction::whereJsonContains('detail', [['seller_id' => auth()->user()->id]])->orderBy('date', 'DESC')->get();

        $transactions->transform(fn ($item) => [
            'date' => Carbon::createFromFormat('Y-m-d', $item->date)->format('M d, Y'),
            'detail' => array_filter(json_decode($item->detail), fn ($item) => $item->seller_id === auth()->user()->id)
        ]);

        $design = Design::where('user_id', auth()->user()->id)->get();
        $product_sold = $design->sum(fn ($item) => $item->sold);
        $sum = 0;

        foreach ($transactions as $transaction) {
            $time1 = strtotime($transaction['date']);
            $time1 = date('m', $time1);
            $time2 = date('m');

            if ($time1 == $time2) {
                foreach ($transaction['detail'] as $item) {
                    $sum = $sum + $item->product_price;
                }
            }
        }

        return view('page.profile.dashboard', [
            'title' => 'Dashboard',
            'transactions' => $transactions,
            'product_sold' => $product_sold,
            'all_product' => $design->count(),
            'sum' => $sum
        ]);
    }
}
