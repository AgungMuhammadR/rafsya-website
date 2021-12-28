<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class Dashboard extends Controller
{
    public function home () {

        return view('page.home');
    }

    public function faq () {

        return view('page.faq');
    }

    public function consultation () {

        return view('page.consultation');
    }
}
