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

Route::get('/', function () {
    return view('home');
});

Route::prefix('welcome')->group(function () {
//     Route::get('unicode/{slug}-{id}.html', function ($slug,$id) {
//     $content = 'hello my friend';
//     $content.='id = ' . $id.'<br/>';
//     $content.='slug = ' . $slug;
//     return $content;
// });
Route::get('/show-form', function () {
    return view('welcome');
})->name('welcome.show-form');
});
