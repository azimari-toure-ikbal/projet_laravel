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
    return view('index');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/category', function () {
    return view('category_products');
})->name('product-category');

Route::get('/add-product', function () {
    return view('add_product');
})->name('add-product');

Route::get('/detail', function () {
    return view('product_detail');
})->name('product-detail');
