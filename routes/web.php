<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\IndexController;
use App\Http\controllers\LoginController;
use App\Http\controllers\RegisterController;
use App\Http\controllers\ProductController;
use App\Http\controllers\CartController;
use App\Http\controllers\SuccessController;

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
});

Route::get('index',[IndexController::class,'showindex'])->name('index');
Route::get('login',[LoginController::class,'showlogin'])->name('login');
Route::get('register',[RegisterController::class,'showregister'])->name('register');
Route::get('products',[ProductController::class,'showproducts'])->name('products');
Route::get('cart',[CartController::class,'showcart'])->name('cart');
Route::get('success',[SuccessController::class,'showsuccess'])->name('success');
// Route::get('settings',[SuccessController::class,'showsuccess'])->name('settings');


// post
Route::post('login',[LoginController::class,'login'])->name('loginpost');
Route::post('register',[RegisterController::class,'register']);
Route::post('logout',[LoginController::class,'logout'])->name('logout');


//product routes
Route::get('addproduct',[ProductController::class,'showaddproduct'])->name('addproduct');


