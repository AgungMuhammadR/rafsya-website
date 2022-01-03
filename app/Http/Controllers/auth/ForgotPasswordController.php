<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller

{
    public function showForgetPasswordForm()
    {
        return view('page.auth.forget_password', [
            'title' => 'Forget Password'
        ]);
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('page.auth.email_forget_password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('info', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token)
    {
        return view('page.auth.forget_password_link', [
            'title' => 'Reset Password',
            'token' => $token
        ]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:5|max:255',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token or email!');
        }

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('success', 'Your password has been changed!');
    }
}
