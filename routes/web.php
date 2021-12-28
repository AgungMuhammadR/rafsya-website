<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Page\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Transaksi;

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

Route::get('/', [Dashboard::class, 'home']);
Route::get('faq', [Dashboard::class, 'faq']);
Route::get('product', [Dashboard::class, 'product']);
Route::get('consultation', [Dashboard::class, 'consultation']);

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
    Route::get('modern', [Kategori::class, 'modern']);
});

Route::get('cart', [Transaksi::class, 'cart']);
Route::get('payment_method', [Transaksi::class, 'payment_method']);
Route::get('payment_detail', [Transaksi::class, 'payment_detail']);
Route::get('payment_confirmed', [Transaksi::class, 'payment_confirmed']);

Route::post('testing', [ProductController::class, 'data']);
