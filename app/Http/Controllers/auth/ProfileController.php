<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
            'detail' => json_decode($item->detail)
        ]);

        return view('page.profile.transaction_list', [
            'transactions' => $transactions
        ]);
    }

    public function dashboard()
    {
        return view('page.profile.dashboard');
    }
}
