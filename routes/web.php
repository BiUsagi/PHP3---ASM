<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;


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