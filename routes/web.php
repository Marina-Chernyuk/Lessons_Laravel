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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Всем привет!';
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/shopping cart', function () {
    return view('shopping cart');
});

Route::get('/single page', function () {
    return view('single page');
});
