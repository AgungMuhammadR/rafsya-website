<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use App\Models\Design;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('page.home', [
            'title' => 'Beranda',
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'types' => Type::orderBy('id', 'ASC')->get(),
            'designs' => Design::with('type','owner')->orderBy('sold', 'DESC')->take(4)->get()
        ]);
    }

    public function faq()
    {
        return view('page.faq', ['title' => 'FAQ']);
    }
}
