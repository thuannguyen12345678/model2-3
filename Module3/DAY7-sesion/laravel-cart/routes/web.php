<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\App;

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
Route::get('/',[\App\Http\Controllers\ShopController::class,'index'])->name('shop.index');

 

Route::get('/carts',[\App\Http\Controllers\ShopController::class,'getCart'])->name('shop.getCart');

 

Route::get('/{idProduct}/add-to-cart', [\App\Http\Controllers\ShopController::class,'addToCart'])->name('add-to-cart');






Route::get('/alo1', function () {
    $cr_lang = session('cr_lang');
    App::setlocale($cr_lang);

   echo __('messages.hello');
});

Route::get('/changeLang/{lang}', function ($lang) {
    session(['cr_lang' => $lang]);
    return redirect('alo1');
});
