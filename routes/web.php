<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AdminController;


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

    // posts - bài viết
    // Route::get('/posts', [PostsController::class, 'index'])->name('admin.posts');
    // Route::get('/posts/create', [PostsController::class, 'create'])->name('admin.create');

    // // comments - bình luận
    // Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments');

    // // accounts - tài khoản
    // Route::get('/staff', [AccountsController::class, 'staffaccount'])->name('admin.staff');
    // Route::get('/customer', [AccountsController::class, 'orders'])->name('admin.customer');
});