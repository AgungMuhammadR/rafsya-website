<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class OpenStoreController extends Controller
{
    public function index()
    {
        return view('page.profile.open_store', ['title' => 'Buka Toko']);
    }

    public function openStore(Request $request)
    {
        $this->validate($request, [
            'license' => 'nullable|mimes:pdf',
            'store_name' => 'required'
        ]);

        if ($request->hasFile('license')) {
            $license = 'license_' . auth()->user()->username . '.' . $request->license->getClientOriginalExtension();
            $this->upload($license, $request->license, 'license');
        }

        User::where('id', auth()->user()->id)->update([
            'license' => $license,
            'store_name' => $request->store_name,
            'role_id' => 1
        ]);

        return view('page.profile.store_opened', ['title' => 'Buka Toko']);
    }

    private function upload($name, UploadedFile $photo, $folder)
    {
        $destination_path = $folder;
        $photo->move($destination_path, $name);
    }
}
