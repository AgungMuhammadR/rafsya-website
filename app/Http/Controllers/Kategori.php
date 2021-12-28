<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kategori extends Controller
{
    public function modern () {

        return view('page.category.modern');
    }
}
