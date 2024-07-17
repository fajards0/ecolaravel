<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('shop', [FrontController::class, 'shop']);
Route::get('shop', [FrontController::class, 'Produk']);
Route::get('produkdetail/{id}', [FrontController::class, 'produkDetail']);
Route::get('/', [FrontController::class, 'index'])->name('user.index');
Route::get('shop/kategori/{id}', [FrontController::class, 'kategori']);
Route::get('/search', [FrontController::class, 'search']);
Route::get('error', [FrontController::class, 'error']);
Route::get('errorThisPage', [FrontController::class, 'errorThisPage']);

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('homeAdmin', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('homeAdmin');
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');
});
