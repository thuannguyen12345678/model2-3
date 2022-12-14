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
    return view('welcome');
});
Route::get('/', function () {
    echo "<h2>This is Home page</h2>";
});
 
Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});



//Trên trình duyệt chạy http://localhost:8000/contact để truy cập trang Contact
Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});

//Khi Routing thực thi thì nó có thể nhận và truyền các tham số, tại routes/web.php tạo thêm route như sau:
Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});

//có thể truyền tham số trên thanh địa chỉ
Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});

//Không cần truyền tham số vẫn được
Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});


//Vào routes.php tạo routes thực thi controller vừa tạo xong
Route::get('/', 'App\Http\Controllers\HomeController@index');