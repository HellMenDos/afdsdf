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
Route::get('/admin/del/{id}', [AdminController::class, 'delete']);
Route::get('/admin/delproduct/{id}', [AdminController::class, 'deleteProduct']);


Route::post('/admin', [AdminController::class, 'index']);

Route::post('/admin/adduser', [AdminController::class, 'addUser']);
Route::post('/admin/update', [AdminController::class, 'update']);
Route::post('/admin/addproduct', [AdminController::class, 'addProduct']);
Route::post('/admin/updateproduct', [AdminController::class, 'updateProduct']);

Route::post('/admin/uploadphoto', [AdminController::class, 'uploadPhoto']);
Route::get('/admin/delphotoproduct/{id}', [AdminController::class, 'DelPhoto']);