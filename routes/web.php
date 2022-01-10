<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Page\DashboardController;
use App\Http\Controllers\Page\DesignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\OpenStoreController;
use App\Http\Controllers\Page\ProductController;
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
Route::get('consultation', [DesignController::class, 'consultation'])->name('consultation');
Route::get('search-product', [DesignController::class, 'search_product']);

Route::group(['prefix' => 'category'], function () {
    Route::get('{category}', [DesignController::class, 'category']);
    Route::get('{category}/{id}', [DesignController::class, 'detail_category']);
});

Route::group(['prefix' => 'type'], function () {
    Route::get('{type}', [DesignController::class, 'type']);
    Route::get('{type}/{id}', [DesignController::class, 'detail_type']);
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('', [ProfileController::class, 'index']);
    Route::put('update', [ProfileController::class, 'update'])->name('profile.put');
    Route::get('cities/{parent_id}', [ProfileController::class, 'cities']);

    Route::group(['middleware' => 'customer'], function () {
        Route::get('transaction_list', [ProfileController::class, 'transaction_list']);
        Route::get('download_blueprint', [ProfileController::class, 'download_blueprint'])->name('download-blueprint');
        Route::get('open_store', [OpenStoreController::class, 'index']);
        Route::put('open_store', [OpenStoreController::class, 'openStore'])->name('open.store.put');
    });

    Route::group(['middleware' => 'architect'], function () {
        Route::get('product', [ProductController::class, 'index']);
        Route::get('insert_product', [ProductController::class, 'insertProductPage']);
        Route::post('insert_product', [ProductController::class, 'insertProductData'])->name('product.post');
        Route::get('dashboard', [ProfileController::class, 'dashboard']);
        Route::post('withdraw_income', [ProfileController::class, 'withdraw_income'])->name('withdraw.income.post');
    });
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

Route::group(['prefix' => 'cart', 'middleware' => ['auth', 'customer']], function () {
    Route::get('', [TransactionController::class, 'cart']);
    Route::post('shop-now', [TransactionController::class, 'shop_now'])->name('shop.now');
    Route::post('add-cart', [TransactionController::class, 'add_cart'])->name('add.cart');
    Route::post('delete-cart', [TransactionController::class, 'delete_cart'])->name('delete.cart');
    Route::get('payment_method', [TransactionController::class, 'payment_method']);
    Route::post('payment_method', [TransactionController::class, 'checkout'])->name('checkout.post');
});
