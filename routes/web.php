<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;


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

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/search', function () {
    return view('search');
});
Route::post('/addToCart', function () {
    return view('addToCart');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post('/cartlist', function () {
    return view('cartlist');
});


Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("addToCart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartlist']);