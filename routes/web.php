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

Route::get('/', function () {return view('homepage');});
Route::get('/category', function () {return view('category');});
Route::get('/release', function () {return view('releasedates');});
Route::get('/product', function () {return view('product');});
Route::get('/profile', function () {return view('profile');});
Route::get('/cart', function () {return view('shoppingcart');});
