<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Design;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DesignController extends Controller
{
    public function category($category)
    {
        $designs = Design::whereHas('category', fn ($query) => $query->where('slug', $category))->get();

        $designs->transform(fn ($item) => [
            'id' => $item->id,
            'name' => $item->name,
            'type' => Type::find($item->type_id)->value,
            'price' => 'Rp.' . number_format($item->price, 0, ',', '.'),
            'owner' => $item->owner->username,
            'image' => json_decode($item->image)
        ]);

        return view('page.product.product', [
            'title' => 'Kategori',
            'items' => Category::orderBy('id', 'ASC')->get(),
            'designs' => $designs,
            'current_state' => ucwords($category)
        ]);
    }

    public function detail_category($category, $id)
    {
        $design = Design::with('owner')->where('id', $id)->whereHas('category', fn ($query) => $query->where('slug', $category))->first();

        return view('page.product.detail_product', [
            'title' => 'Kategori',
            'items' => Category::orderBy('id', 'ASC')->get(),
            'design' => $design,
            'current_state' => ucwords($category)
        ]);
    }

    public function type($type)
    {
        $designs = Design::whereHas('type', fn ($query) => $query->where('value', $type))->get();

        $designs->transform(fn ($item) => [
            'id' => $item->id,
            'name' => $item->name,
            'type' => $item->type->value,
            'price' => 'Rp.' . number_format($item->price, 0, ',', '.'),
            'owner' => $item->owner->username,
            'image' => json_decode($item->image)
        ]);

        return view('page.product.product', [
            'title' => 'Tipe',
            'items' => Type::orderBy('id', 'ASC')->get(),
            'designs' => $designs,
            'current_state' => $type
        ]);
    }

    public function detail_type($type, $id)
    {
        $design = Design::with('owner')->where('id', $id)->whereHas('type', fn ($query) => $query->where('value', $type))->first();

        return view('page.product.detail_product', [
            'title' => 'Tipe',
            'items' => Category::orderBy('id', 'ASC')->get(),
            'design' => $design,
            'current_state' => ucwords($type),
        ]);
    }

    public function consultation(Request $request)
    {
        $email = Crypt::decrypt($request->data[0]);
        $phone_number = Crypt::decrypt($request->data[1]);
        $phone_number = substr($phone_number, 0, 1) === '0' ? substr_replace($phone_number, '62', 0, 1) : $phone_number;

        return view('page.consultation', [
            'title' => 'Konsultasi',
            'email' => $email,
            'phone_number' => $phone_number
        ]);
    }

    public function search_product(Request $request)
    {
        $data = Design::with('owner', 'type')->where('name', 'like', '%' . $request->keyword . '%')->get();
        return $data;
    }
}
