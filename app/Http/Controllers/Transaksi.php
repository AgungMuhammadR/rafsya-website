<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Transaksi extends Controller
{
    public function cart () {

        return view('page.cart');
    }

    public function payment_method () {

        return view('page.payment.payment_method');
    }

    public function payment_detail () {

        return view('page.payment.payment_detail');
    }

    public function payment_confirmed () {

        return view('page.payment.payment_confirmed');
    }
}
