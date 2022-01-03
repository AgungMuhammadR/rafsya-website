<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('page.home', [
            'categories' => Category::orderBy('id', 'ASC')->get()
        ]);
    }

    public function faq()
    {
        return view('page.faq');
    }

    public function consultation()
    {
        return view('page.consultation');
    }
}
