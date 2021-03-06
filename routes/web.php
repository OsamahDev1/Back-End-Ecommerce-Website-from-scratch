<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\LoginController;
use App\Http\controllers\RegisterController;
use App\Http\controllers\ProductController;
use App\Http\controllers\CartController;
use App\Http\controllers\SuccessController;
use App\Http\controllers\IndexController;
use App\Http\controllers\SettingController;

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
    return view('home');
});

Route::get('home',[HomeController::class,'show'])->name('home');
Route::get('cart',[CartController::class,'show'])->name('cart');
Route::get('success',[SuccessController::class,'show'])->name('success');
Route::get('settings',[SettingController::class,'show'])->name('settings');
Route::get('index',[IndexController::class,'show'])->name('index');


// Auth routes
Route::get('register',[RegisterController::class,'create'])->name('register');
Route::post('register',[RegisterController::class,'store']);
Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'store']);
Route::post('logout',[LoginController::class,'destroy'])->name('logout');


//product routes
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products/store',[ProductController::class,'store'])->name('products.store');


