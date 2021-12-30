<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function modern($category)
    {
        // $data = Category::where('slug', $category)->first();
        // dd($data->id);

        return view('page.category.modern', [
            'categories' => Category::orderBy('id', 'ASC')->get()
        ]);
    }
}
