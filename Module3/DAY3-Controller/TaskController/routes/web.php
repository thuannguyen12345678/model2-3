<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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




Route::resource('photos',CustomerController::class);
/*
    photos
        GET     => /             => index       => photos.index
        GET     => /create       => create      => photos.create
        POST    => /store        => store       => photos.store
        GET     => /{id}/edit    => edit        => photos.edit
        GET     => /{id}         => show        => photos.show
        PUT     => /{id}         => update      => photos.update
        DELETE  => /{id}         => destroy     => photos.destroy
*/




Route::prefix('tasks')->group(function () {
    //trang danh sach
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index')->middleware('check.age');

    //add:
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');

    //add:
    Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');

    //edit:
    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

    //update:
    Route::put('/{id}', [TaskController::class, 'update'])->name('tasks.update');


    //show:
    Route::get('/{id}', [TaskController::class, 'show'])->name('tasks.show');

    //xóa:
    Route::delete('/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});

Route::get('/login' , function(){
    echo '<h1>Login</h1>';
})->name('login');


Route::get('/alo/{age?}',function($age=0){
    echo '<h1>Uong Bia</h1>';
})->middleware('check.age')->name('uong-bia');

Route::get('/alo1/{age?}',function($age=0){
    echo '<h1>Uong Nuoc ngot</h1>';
})->name('uong-nuoc-ngot');

Route::get('admin',AdminController::class);

