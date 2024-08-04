<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/tintuc/{id}', [HomeController::class, 'tintuc']);
Route::get('/theloai', [HomeController::class, 'theloai']);
Route::get('/timkiem', [HomeController::class, 'timkiem']);
Route::get('/gioithieu', [HomeController::class, 'gioithieu']);
Route::get('/lienhe', [HomeController::class, 'lienhe']);