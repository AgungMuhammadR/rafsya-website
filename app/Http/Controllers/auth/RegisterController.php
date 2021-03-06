<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('page.auth.register', [
            'title' => 'Daftar'
        ]);
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}
