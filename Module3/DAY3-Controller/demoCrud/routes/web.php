<?php
use App\Http\Controllers\quanlyController;
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

Route::get('/alo', function () {
    return view('layouts.admin.master');
});


// Route::get('/', function () {
//     return view('index');
// });
Route::prefix('customer')->group(function () {
    Route::get('index', [quanlyController::class, 'index']);

    Route::get('create', [quanlyController::class, 'create']
        // Hiển thị Form tạo khách hàng
);

    Route::post('store',
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
   );

    Route::get('{id}/show', 
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    );

    Route::get('{id}/edit', 
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    );

    Route::patch('{id}/update', 
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    );

    Route::delete('{id}', 
        // Xóa thông tin dữ liệu khách hàng
    );
});
