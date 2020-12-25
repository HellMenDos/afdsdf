<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;



Route::get('/api/getproducts/{title}', [MainController::class, 'ProductsByTitle']);
Route::get('/api/allProducts', [MainController::class, 'AllProducts']);
Route::get('/api/product/{id}', [MainController::class, 'getProduct']);
Route::post('/api/tocart', [MainController::class, 'addTocart']);
Route::get('/api/user/{id}', [MainController::class, 'getUser']);
Route::get('/api/cart/{id}', [MainController::class, 'PrdoductCart']);

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'index']);

Route::post('/admin/update', [AdminController::class, 'update']);
Route::post('/admin/updateproduct', [AdminController::class, 'updateProduct']);
Route::post('/admin/uploadphoto', [AdminController::class, 'uploadPhoto']);

Route::post('/admin/adduser', [AdminController::class, 'addUser']);
Route::post('/admin/addproduct', [AdminController::class, 'addProduct']);
Route::post('/admin/addcomment', [AdminController::class, 'addComment']);

Route::get('/admin/delphotoproduct/{id}', [AdminController::class, 'DelPhoto']);
Route::get('/admin/delcomment/{id}', [AdminController::class, 'DelComment']);
Route::get('/admin/delcart/{id}', [AdminController::class, 'delCart']);
Route::get('/admin/del/{id}', [AdminController::class, 'delete']);
Route::get('/admin/delproduct/{id}', [AdminController::class, 'deleteProduct']);


Route::post('/admin/addcart/', [AdminController::class, 'addTocart']);



Route::get('/api/activate/{id}', [RegController::class, 'activate']);
Route::post('/api/registr', [RegController::class, 'registr']);
Route::post('/api/login', [RegController::class, 'login']);
Route::post('/api/forget', [RegController::class, 'forget']);
Route::post('/api/update', [RegController::class, 'update']);



