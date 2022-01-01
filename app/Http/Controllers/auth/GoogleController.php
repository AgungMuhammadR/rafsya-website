<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle () {
        
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback () {

 
        $user = Socialite::driver('google')->stateless()->user();    
        $findUser = User::where('google_id', $user->getId())->first();
            
        if($findUser) {
            Auth::login($findUser);
            return redirect ('/');
        }
            
        else {
            $newUser = User::create([
                'email' => $user->email,
                'google_id' => $user->id,
                'username' => $user->name,
                'password' => bcrypt('12345678'),
                'picture' => $user->avatar_original
            ]);
                
            Auth::login($newUser);
            return redirect('/');
        }

    }
    
}
