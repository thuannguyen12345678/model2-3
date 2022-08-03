<?php

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
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
    return view('dictionary');
});




Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary', function (Request $request) {
    //    dd($request->all());
    $flag = 0;
    $vn = $request->vn;
    $tu_dien = [
        "hello" => "xin chào",
        "bye" => "tạm biệt",
        "book" => "sách",
        "dog" => "chó",
        "cat" => "mèo",
        "noodles" => "mì",
        "price" => "cơm",
        "please" => "vui lòng"
    ];
    foreach ($tu_dien as $key => $value) {
        if ($vn == $key) {
            $flag = 1;
            echo "<h2> Từ $vn có nghĩa là:  $value</h2>";
        }
    }
    if ($flag == 0) {
        echo "<h1>Thầy chưa dạy</h1>";
    }
    // return view('ketqua');
});






//tao: 
Route::get('/create',function (){
    return view('add');

});




//đọc:
Route::post('/show',function ( Request  $request){
    $add = $request->add;
   dd($add);

});



//sửa:
Route::get('/edit/{id}',function ($id){
    return view('update');
});
Route::put('/update', function ( Request  $request){
    dd($request->all());
});



//xóa:
Route::delete('/delete/{id?}', function (request $request) {
    dd($request->all());
});
