<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Design;
use App\Models\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category)
    {
        $designs = Design::whereHas('category', fn ($query) => $query->where('slug', $category))->get();

        $designs->transform(fn ($item) => [
            'name' => $item->name,
            'type' => Type::find($item->type_id)->value,
            'price' => 'Rp.' . number_format($item->price, 0, ',', '.')
        ]);

        return view('page.category.index', [
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'designs' => $designs
        ]);
    }
}
