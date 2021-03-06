<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Design;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    public function index()
    {
        $designs = Design::with('owner')->where('user_id', auth()->user()->id)->get();

        $designs->transform(fn ($item) => [
            'name' => $item->name,
            'type' => Type::find($item->type_id)->value,
            'price' => 'Rp.' . number_format($item->price, 0, ',', '.'),
            'owner' => $item->owner->username,
            'image' => json_decode($item->image)
        ]);

        return view('page.profile.list_product', [
            'title' => 'Produk',
            'designs' => $designs
        ]);
    }

    public function insertProductPage()
    {
        return view('page.profile.insert_product', [
            'title' => 'Tambah Produk',
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'types' => Type::orderBy('id', 'ASC')->get()
        ]);
    }

    public function insertProductData(Request $request)
    {
        $messages = [
            "image.max" => "file can't be more than 5."
        ];

        $this->validate($request, [
            'image' => 'nullable|max:5',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blueprint' => 'required|mimes:pdf',
            'name' => 'required|unique:designs',
            'description' => 'required',
            'price' => 'required'
        ], $messages);

        $image_data = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name = $image->getClientOriginalName();
                $this->upload($name, $image, 'designs/' . auth()->user()->username . '/' . $request->name);
                $image_data[] = $name;
            }
        }

        if ($request->hasFile('blueprint')) {
            $blueprint = $request->blueprint->getClientOriginalName();
            $this->upload($blueprint, $request->blueprint, 'designs/' . auth()->user()->username . '/' . $request->name);
        }

        $design = Design::create([
            'name' => $request->name,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'image' => json_encode($image_data),
            'blueprint' => $blueprint,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('/profile/product')->with('success', 'Product has been added!');
    }

    private function upload($name, UploadedFile $photo, $folder)
    {
        $destination_path = $folder;
        $photo->move($destination_path, $name);
    }
}
