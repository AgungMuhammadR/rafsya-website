<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
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

Route::group(['prefix' => 'profile'], function () {
    Route::get('', [ProfileController::class, 'index']);
    Route::put('update', [ProfileController::class, 'update']);
    Route::get('cities/{parent_id}', [ProfileController::class, 'cities']);
});

Route::group(['prefix' => 'login'], function () {
    Route::get('', [LoginController::class, 'index']);
    Route::post('', [LoginController::class, 'login']);
});
Route::post('logout', [LoginController::class, 'logout']);

Route::group(['prefix' => 'register'], function () {
    Route::get('', [RegisterController::class, 'index']);
    Route::post('', [RegisterController::class, 'register']);
});

Route::group(['prefix' => 'category'], function () {
    Route::get('modern', function () {
        return view('page.category.modern');
    });
});

Route::get('faq', function () {
    return view('page.faq');
});

Route::get('cart', function () {
    return view('page.cart');
});

Route::get('payment_method', function () {
    return view('page.payment.payment_method');
});

Route::get('payment_detail', function () {
    return view('page.payment.payment_detail');
});

Route::get('payment_confirmed', function () {
    return view('page.payment.payment_confirmed');
});