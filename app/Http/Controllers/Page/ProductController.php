<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    public function data(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required'
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name = $image->getClientOriginalName();
                $this->upload($name, $image, 'test');
                $image_data[] = $name;
            }
        }

        $design = Design::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'image' => json_encode($image_data),
            'price' => $request->price
        ]);

        $test = json_decode($design->image);

        return response([
            'status' => 'success',
            'design' => $test[0]
        ]);
    }

    private function upload($name, UploadedFile $photo, $folder)
    {
        $destination_path = $folder;
        $photo->move($destination_path, $name);
    }
}
