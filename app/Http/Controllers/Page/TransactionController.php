<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Design;

class TransactionController extends Controller
{
    public function cart()
    {

        $myCart = Cart::with('design')->where('user_id', Auth::id())->get();

        return view('page.cart',[
            'carts' => $myCart
        ]);
    }

    public function payment_method()
    {
        return view('page.payment.payment_method');
    }

    public function payment_detail()
    {
        return view('page.payment.payment_detail');
    }

    public function payment_confirmed()
    {
        return view('page.payment.payment_confirmed');
    }
    
    public function add_cart (Request $request) {
        
        $data = [
            'user_id' => Auth::id(),
            'design_id' => $request->design_id
        ];


        if (Cart::where($data)->first() != NULL) {
            return redirect('/category/modern')->with('error', 'Produk sudah ditambahkan pada cart');
        }

        else {
            Cart::insert($data);
            return redirect('/category/modern')->with('success', 'Produk berhasil ditambahkan ke cart');
        }
        

    }

    public function delete_cart (Request $request) {

        $data = [
            'user_id' => Auth::id(),
            'design_id' => $request->design_id
        ];

        Cart::where($data)->delete();

        return redirect ('/cart')->with('success', 'Produk berhasil dihapus dari cart');
    }
}
