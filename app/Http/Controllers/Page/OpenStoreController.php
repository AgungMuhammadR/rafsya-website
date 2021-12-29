<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class OpenStoreController extends Controller
{
    public function open_store(Request $request)
    {
        $this->validate($request, [
            'license' => 'required|mimes:pdf',
            'store_name' => 'required'
        ]);

        if ($request->hasFile('license')) {
            $license = $request->license->getClientOriginalName();
            $this->upload($license, $request->license, 'license');
        }

        User::where('id', 1)->update([
            'license' => $license,
            'store_name' => $request->store_name,
            'role_id' => 1
        ]);

        return response([
            'status' => 'success'
        ]);
    }

    private function upload($name, UploadedFile $photo, $folder)
    {
        $destination_path = $folder;
        $photo->move($destination_path, $name);
    }
}
