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
    public function index_product()
    {
        $designs = Design::where('user_id', auth()->user()->id)->get();

        $designs->transform(fn ($item) => [
            'name' => $item->name,
            'type' => Type::find($item->type_id)->value,
            'price' => 'Rp.' . number_format($item->price, 0, ',', '.')
        ]);

        return view('page.profile.list-product', [
            'designs' => $designs
        ]);
    }

    public function index_insert_product()
    {
        if (auth()->user()->role_id === 2) {
            return redirect('profile');
        }

        return view('page.profile.insert-product', [
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'types' => Type::orderBy('id', 'ASC')->get()
        ]);
    }

    public function insert_product(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blueprint' => 'required|mimes:pdf',
            'name' => 'required|unique:designs',
            'description' => 'required',
            'price' => 'required'
        ]);

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

        return redirect('/profile')->with('success', 'Berhasil tambah produk');
    }

    private function upload($name, UploadedFile $photo, $folder)
    {
        $destination_path = $folder;
        $photo->move($destination_path, $name);
    }
}
