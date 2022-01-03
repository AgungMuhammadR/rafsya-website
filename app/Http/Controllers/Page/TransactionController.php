<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Design;
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

        return view('page.payment.payment_method', [
            'carts' => $myCart,
            'sum' => 'Rp.' . number_format($sum, 0, ',', '.')
        ]);
    }

    public function payment_detail()
    {
        $myCart = Cart::with('design')->where('user_id', Auth::id())->get();

        $sum = $myCart->sum(fn ($item) => $item->design->price);

        return view('page.payment.payment_detail', [
            'carts' => $myCart,
            'sum' => 'Rp.' . number_format($sum, 0, ',', '.')
        ]);
    }

    public function payment_confirmed()
    {
        $myCart = Cart::with('design')->where('user_id', Auth::id())->get();

        $sum = $myCart->sum(fn ($item) => $item->design->price);

        return view('page.payment.payment_confirmed', [
            'carts' => $myCart,
            'sum' => 'Rp.' . number_format($sum, 0, ',', '.')
        ]);
    }

    public function checkout()
    {
        Transaction::create([
            'detail' => 'transaction success',
            'date' => Carbon::now(),
            'user_id' => auth()->user()->id
        ]);

        Cart::where('user_id', auth()->user()->id)->delete();

        return redirect('/cart')->with('info', 'Checkout success, thank you!');
    }

    public function add_cart(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'design_id' => $request->design_id
        ];


        if (Cart::where($data)->first() != NULL) {
            return redirect('/category/modern')->with('error', 'Produk sudah ditambahkan pada cart');
        } else {
            Cart::insert($data);
            return redirect('/category/modern')->with('success', 'Produk berhasil ditambahkan ke cart');
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
}
