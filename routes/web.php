<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
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
    return view('home');
});

Route::get('home',[HomeController::class,'showHomePage'])->name('home');
Route::get('cart',[CartController::class,'showCartPage'])->name('cart');
Route::get('success',[SuccessController::class,'showSuccessPage'])->name('success');
Route::get('settings',[SettingsController::class,'showSettingsPage'])->name('settings');
Route::get('index',[IndexController::class,'show'])->name('index');


// Auth routes
Route::get('register',[RegisterController::class,'showRegisterPage'])->name('register');
Route::post('register',[RegisterController::class,'register']);
Route::get('login',[LoginController::class,'showLoginPage'])->name('login');
Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout'])->name('logout');


//product routes
Route::get('products/create',[ProductController::class,'create'])->name('create.products');
Route::post('products/store',[ProductController::class,'store'])->name('store.products');


