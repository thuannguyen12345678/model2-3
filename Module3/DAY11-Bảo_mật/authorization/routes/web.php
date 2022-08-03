<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'index2'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'index3'])->name('register');
Route::get('/page-guest', [App\Http\Controllers\HomeController::class,'showPageGuest']);

Route::get('/page-admin', [App\Http\Controllers\HomeController::class,'showPageAdmin']);


