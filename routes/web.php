<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// frontend
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\DanhMucConroller;
use \App\Http\Controllers\frontend\TinTucController;


// backend
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BinhLuanController;
use App\Http\Controllers\backend\BaiVietController;
use App\Http\Controllers\backend\TaiKhoanController;
use App\Http\Controllers\backend\TheLoaiController;




// frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/timkiem', [HomeController::class, 'timkiem'])->name('timkiem');
Route::get('/gioithieu', [HomeController::class, 'gioithieu'])->name('gioithieu');
Route::get('/lienhe', [HomeController::class, 'lienhe'])->name('lienhe');

// Bài viết
Route::get('/baiviet/{id}', [TinTucController::class, 'baiviet'])->name('baiviet.one');


// thể loại
Route::get('/theloai', [DanhMucConroller::class, 'index'])->name('theloai');
Route::get('/theloai/{id}', [DanhMucConroller::class, 'theloai'])->name('theloai.id');




// user
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


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

    //  bài viết
    Route::get('/baiviet', [BaiVietController::class, 'index'])->name('admin.baiviet');
    Route::get('/baiviet/create', [BaiVietController::class, 'create'])->name('admin.baiviet.create');
    Route::post('/baiviet/store', [BaiVietController::class, 'store'])->name('admin.baiviet.store');
    Route::get('/baiviet/update/{id}', [BaiVietController::class, 'update'])->name('admin.baiviet.update');
    Route::post('/baiviet/update/{id}', [BaiVietController::class, 'up'])->name('admin.baiviet.up');
    Route::get('/baiviet/delete/{id}', [BaiVietController::class, 'delete'])->name('admin.baiviet.delete');

    // thể loại
    Route::get('/theloai', [TheLoaiController::class, 'index'])->name('admin.theloai');
    Route::get('/theloai/create', [TheLoaiController::class, 'create'])->name('admin.theloai.create');
    Route::post('/theloai/store', [TheLoaiController::class, 'store'])->name('admin.theloai.store');
    Route::get('/theloai/update/{id}', [TheLoaiController::class, 'update'])->name('admin.theloai.update');
    Route::post('/theloai/update/{id} ', [TheLoaiController::class, 'up'])->name('admin.theloai.up');
    Route::get('/theloai/delete/{id}', [TheLoaiController::class, 'delete'])->name('admin.theloai.delete');

    // bình luận
    Route::get('/binhluan', [BinhLuanController::class, 'index'])->name('admin.binhluan');

    //  tài khoản
    Route::get('/taikhoan', [TaiKhoanController::class, 'index'])->name('admin.taikhoan');
});