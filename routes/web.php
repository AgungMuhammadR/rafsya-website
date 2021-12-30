<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
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
    Route::put('update', [ProfileController::class, 'update']);
    Route::get('cities/{parent_id}', [ProfileController::class, 'cities']);
    Route::get('product', [ProductController::class, 'index_product']);
    Route::get('insert-product', [ProductController::class, 'index_insert_product']);
    Route::post('insert-product', [ProductController::class, 'insert_product'])->name('product.post');
    Route::get('open-store', [OpenStoreController::class, 'index']);
    Route::post('open-store', [OpenStoreController::class, 'open_store'])->name('open.store.post');
});

Route::group(['prefix' => 'login'], function () {
    Route::get('', [LoginController::class, 'index'])->name('login');
    Route::post('', [LoginController::class, 'login']);
});
Route::post('logout', [LoginController::class, 'logout']);

Route::group(['prefix' => 'register'], function () {
    Route::get('', [RegisterController::class, 'index']);
    Route::post('', [RegisterController::class, 'register']);
});

Route::group(['prefix' => 'forget-password'], function () {
    Route::get('', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
});

Route::group(['prefix' => 'reset-password'], function () {
    Route::get('{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('{category}', [CategoryController::class, 'modern']);
});

Route::get('cart', [TransactionController::class, 'cart']);
Route::get('payment_method', [TransactionController::class, 'payment_method']);
Route::get('payment_detail', [TransactionController::class, 'payment_detail']);
Route::get('payment_confirmed', [TransactionController::class, 'payment_confirmed']);

Route::post('testing1', [ProductController::class, 'insert_product']);
Route::put('testing2', [OpenStoreController::class, 'open_store']);
