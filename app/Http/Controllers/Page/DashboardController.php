<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('page.home', [
            'title' => 'Beranda',
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'types' => Type::orderBy('id', 'ASC')->get()
        ]);
    }

    public function faq()
    {
        return view('page.faq', ['title' => 'FAQ']);
    }
}
