<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Page\CategoryController;
use App\Http\Controllers\Page\DashboardController;
use App\Http\Controllers\Page\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\OpenStoreController;
use App\Http\Controllers\Page\TransactionController;

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

Route::get('/', [DashboardController::class, 'home']);
Route::get('faq', [DashboardController::class, 'faq']);
Route::get('consultation', [DashboardController::class, 'consultation']);

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('', [ProfileController::class, 'index']);
    Route::put('update', [ProfileController::class, 'update'])->name('profile.put');
    Route::get('cities/{parent_id}', [ProfileController::class, 'cities']);
    Route::get('product', [ProductController::class, 'index']);
    Route::get('insert_product', [ProductController::class, 'insertProductPage']);
    Route::post('insert_product', [ProductController::class, 'insertProductData'])->name('product.post');
    Route::get('open_store', [OpenStoreController::class, 'index']);
    Route::put('open_store', [OpenStoreController::class, 'openStore'])->name('open.store.put');
});

Route::group(['prefix' => 'login'], function () {
    Route::get('', [LoginController::class, 'index'])->name('login');
    Route::post('', [LoginController::class, 'login'])->name('login.post');
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'register'], function () {
    Route::get('', [RegisterController::class, 'index'])->name('register');
    Route::post('', [RegisterController::class, 'register'])->name('register.post');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::get('facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
    Route::get('facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');
});

Route::group(['prefix' => 'forget_password'], function () {
    Route::get('', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
});

Route::group(['prefix' => 'reset_password'], function () {
    Route::get('{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('{category}', [CategoryController::class, 'index']);
});

Route::get('cart', [TransactionController::class, 'cart']);
Route::get('payment_method', [TransactionController::class, 'payment_method']);
Route::get('payment_detail', [TransactionController::class, 'payment_detail']);
Route::get('payment_confirmed', [TransactionController::class, 'payment_confirmed']);
