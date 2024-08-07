<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// frontend
use App\Http\Controllers\frontend\HomeController;


// backend
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BinhLuanController;
use App\Http\Controllers\backend\BaiVietController;
use App\Http\Controllers\backend\TaiKhoanController;
use App\Http\Controllers\backend\TheLoaiController;




// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/tintuc/{id}', [HomeController::class, 'tintuc']);
Route::get('/theloai', [HomeController::class, 'theloai']);
Route::get('/timkiem', [HomeController::class, 'timkiem']);
Route::get('/gioithieu', [HomeController::class, 'gioithieu']);
Route::get('/lienhe', [HomeController::class, 'lienhe']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



// Backend

Route::prefix('admin')->group(function () {

    // dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin');

    // statistical - thống kê
    // Route::get('/statistical', [StatisticalController::class, 'index'])->name('admin.statistical');

    //  bài viết
    Route::get('/baiviet', [BaiVietController::class, 'index'])->name('admin.baiviet');
    Route::get('/baiviet/create', [BaiVietController::class, 'create'])->name('admin.baiviet.create');

    // thể loại
    Route::get('/theloai', [TheLoaiController::class, 'index'])->name('admin.theloai');
    Route::get('/theloai/create', [TheLoaiController::class, 'create'])->name('admin.theloai.create');


    // bình luận
    Route::get('/binhluan', [BinhLuanController::class, 'index'])->name('admin.binhluan');

    //  tài khoản
    Route::get('/taikhoan', [TaiKhoanController::class, 'index'])->name('admin.taikhoan');
});