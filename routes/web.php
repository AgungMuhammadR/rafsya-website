<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.home');
});

Route::get('login', function () {
    return view('page.login');
});

Route::get('register', function () {
    return view('page.register');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('modern', function () {
        return view('page.category.modern');
    });
});

Route::get('faq', function() {
    return view('page.faq');
});