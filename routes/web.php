<?php

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

//Route::get('/', function () {
//    return \App\Helpers\GenerateQr::create(10000);
//});
Route::get('/products/{id}', [\App\Http\Controllers\HomeController::class, 'showProduct'])->name('product.show');
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::post('/order/add-to-cart/{productId}', [\App\Http\Controllers\OrderController::class, 'addProductToCart'])->name('order.add-to-cart');
//confirmation order
Route::get('/order/confirmation', [\App\Http\Controllers\OrderController::class, 'confirmation'])
    ->name('confirmation');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('promo', function() {
    return view('promotion.index');
});

Route::get('promo/{addId}', [\App\Http\Controllers\HomeController::class, 'promo'])->name('promo');
