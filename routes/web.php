<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;



Route::get('/registr ', [RegController::class, 'registr']);
Route::get('/login ', [RegController::class, 'login']);

Route::get('/ ', [MainController::class, 'index']);

Route::get('/more', [MainController::class, 'more']);
Route::get('/detail', [MainController::class, 'detail']);
Route::get('/profile', [MainController::class, 'profile']);
Route::get('/cart', [MainController::class, 'cart']);



Route::get('/admin', [AdminController::class, 'index']);