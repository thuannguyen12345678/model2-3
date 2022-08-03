<?php

use App\Http\Controllers\HomeContrller;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [HomeContrller::class, 'show_form_register']);
Route::post('/register', [HomeContrller::class, 'register'])->name('register');
Route::get('/login', [HomeContrller::class, 'show_form_login']);
Route::post('/login', [HomeContrller::class, 'login'])->name('login');