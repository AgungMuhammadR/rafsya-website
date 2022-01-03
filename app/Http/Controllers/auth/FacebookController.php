<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $findUser = User::where('facebook_id', $user->id)->first();

        if ($findUser) {

            $newUser = User::where('email', $user->email)->update([
                'facebook_id' => $user->id,
                'username' => $user->name,
                'picture' => $user->avatar
            ]);

            Auth::login($findUser);
            return redirect('/');
        } else {
            $checkEmail = User::where('email', $user->email)->first();

            if ($checkEmail != NULL) {

                $newUser = User::where('email', $user->email)->update([
                    'facebook_id' => $user->id,
                    'username' => $user->name,
                    'picture' => $user->avatar
                ]);

                $newUser = $checkEmail;
            } else {

                $newUser = User::create([
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'username' => $user->name,
                    'password' => Hash::make('12345678'),
                    'picture' => $user->avatar
                ]);
            }

            Auth::login($newUser);
            return redirect('/');
        }
    }
}
