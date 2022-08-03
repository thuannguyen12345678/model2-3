<?php

use Illuminate\Http\Request;
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
    return view('product');
});
Route::post('/product', function (Request $request) {
   $mota = $request->mota;
   $gia = $request->gia;
   $chietkhau = $request->chietkhau;
   $Discount_Amount = $gia * $chietkhau * 0.1;
   $Discount_price = $gia - $Discount_Amount;
   return view('show_discount_amount', compact(['Discount_price','mota','gia','chietkhau', 'Discount_Amount']));
});