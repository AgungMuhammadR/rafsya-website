<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function home () {

        return view('page.home');
    }

    public function faq () {

        return view('page.faq');
    }

    public function product () {

        return view('page.product');
    }

    public function consultation () {

        return view('page.consultation');
    }
}
