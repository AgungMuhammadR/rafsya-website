<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // $validate = $request->validate([
        //     'username' => 'required|max:255',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:255',
        //     'phone_number' => 'required|numeric'
        // ]);

        $validate = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'location_id' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Create user failed',
                'error' => $validate->errors()
            ], 401);
        }

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);

        return response()->json([
            'status' => 'success',
            'message' => 'Create user successfully',
            'data' => $user
        ], 200);
    }
}
