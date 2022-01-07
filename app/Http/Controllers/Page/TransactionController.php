<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function cart()
    {
        $myCart = Cart::with('design')->where('user_id', Auth::id())->get();

        return view('page.cart', [
            'carts' => $myCart
        ]);
    }

    public function payment_method()
    {
        $myCart = Cart::with('design')->where('user_id', Auth::id())->get();
        $sum = $myCart->sum(fn ($item) => $item->design->price);

        if ($myCart->count() === 0) {
            return back()->with('info', 'Tidak ada transaksi, <p>silahkan melakukan transaksi</p>');
        }

        return view('page.payment.payment_method', [
            'carts' => $myCart,
            'sum' => 'Rp.' . number_format($sum, 0, ',', '.')
        ]);
    }

    public function checkout(Request $request)
    {
        $items = json_decode($request->items);
        $sum = 0;

        $detail = array_map(
            fn ($item) => [
                'product_name' => $item->design->name,
                'product_price' => $item->design->price,
                'product_photo' => json_decode($item->design->image),
                'seller_id' => $item->design->user_id,
                'blueprint' => $item->design->blueprint
            ],
            $items
        );

        foreach ($items as $item) {
            $sum = $sum + $item->design->price;
        }

        Transaction::create([
            'detail' => json_encode($detail),
            'date' => Carbon::now(),
            'user_id' => auth()->user()->id
        ]);

        Cart::where('user_id', auth()->user()->id)->delete();

        return view('page.payment.payment_confirmed', [
            'items' => $items,
            'sum' => 'Rp.' . number_format($sum, 0, ',', '.')
        ]);
    }

    public function shop_now(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'design_id' => $request->design_id
        ];

        if (Cart::where($data)->first() != NULL) {
            return back()->with('error', 'Produk sudah ditambahkan pada cart');
        } else {
            Cart::insert($data);
            return redirect('/cart')->with('success', 'Produk berhasil ditambahkan ke cart');
        }
    }

    public function add_cart(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'design_id' => $request->design_id
        ];

        if (Cart::where($data)->first() != NULL) {
            return back()->with('error', 'Produk sudah ditambahkan pada cart');
        } else {
            Cart::insert($data);
            return back()->with('success', 'Produk berhasil ditambahkan ke cart');
        }
    }

    public function delete_cart(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'design_id' => $request->design_id
        ];

        Cart::where($data)->delete();

        return redirect('/cart')->with('success', 'Produk berhasil dihapus dari cart');
    }

    // public function download_blueprint()
    // {
    //     $file = public_path() . '/filename.pdf';

    //     $headers = array('Content-Type: application/pdf');

    //     return response()->download($file, 'filename.pdf', $headers);
    // }
}
