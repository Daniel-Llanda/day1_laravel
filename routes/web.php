<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\authController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/about',[aboutController::class,'index'])->name('about');
Route::get('/contact',[contactController::class,'index'])->middleware('auth')->name('contact');
Route::get('/profile',[profileController::class,'index'])->middleware('auth')->name('profile');

Route::get('/login',[authController::class,'index'])->name('login');
Route::post('/login',[authController::class,'login'])->name('login.submit');

Route::get('/logout',[authController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/register',[authController::class,'register'])->name('register');
Route::post('/register',[authController::class,'register_user'])->name('register');