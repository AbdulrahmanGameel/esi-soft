<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('clients', function () {
    return view('our_clients');
});
Route::get('test', function () {
    return view('test');
});
Route::get('scales', function () {
    return view('products.scales');
});
Route::get('our_products', function () {
    return view('products.our_products');
});
Route::get('restaurant ', function () {
    return view('products.resturaunt');
});
Route::get('supermarket', function () {
    return view('products.supermarket');
});