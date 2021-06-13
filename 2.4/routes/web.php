<?php

use App\Http\Controllers\CustomerController;
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

Route::prefix('customer')->group(function () {
    // Hiển thị danh sách khách hàng
    Route::get('index', [CustomerController::class, 'index']);

    // Hiển thị Form tạo khách hàng
    Route::get('create', [CustomerController::class, 'create']);

    // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    Route::post('store', [CustomerController::class, 'store']);

    // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    Route::get('{id}/show', [CustomerController::class, 'show']);

    // Hiển thị Form chỉnh sửa thông tin khách hàng
    Route::get('{id}/edit', [CustomerController::class, 'edit']);

    // Xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    Route::patch('{id}/update', [CustomerController::class, 'edit']);

    // Xóa thông tin dữ liệu khách hàng
    Route::delete('{id}', [CustomerController::class, 'destroy']);
});
