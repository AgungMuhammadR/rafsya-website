<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index($type)
    {
        $designs = Design::whereHas('type', fn ($query) => $query->where('value', $type))->get();

        $designs->transform(fn ($item) => [
            'name' => $item->name,
            'type' => $item->type->value,
            'price' => 'Rp.' . number_format($item->price, 0, ',', '.')
        ]);

        return view('page.products.type', [
            'types' => Type::orderBy('id', 'ASC')->get(),
            'designs' => $designs,
            'current_type' => $type
        ]);
    }
}
