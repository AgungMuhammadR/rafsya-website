<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $provinces = Location::where('parent_id', 0)->get();

        return view('page.profile.profile', [
            'provinces' => $provinces
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $validate = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'nullable|min:5|max:255',
            'phone_number' => 'required|numeric',
            'address' => 'required',
        ]);

        if ($validate['password'] === null) {
            $validate['password'] = $user->password;
        } else {
            $validate['password'] = Hash::make($validate['password']);
        }

        $validate['location_id'] = $request->city;

        $user->fill($validate);
        $user->save();

        return redirect('/profile')->with('success', 'Profile successfully updated');
    }

    public function cities($parent_id)
    {
        $cities = Location::where('parent_id', $parent_id)->get();

        return $cities;
    }
}
