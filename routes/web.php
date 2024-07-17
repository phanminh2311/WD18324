<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NhtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Base url : http://127.0.0.1:8000/
Route::get('/', function () {
    echo "Trang chủ";
});

// Điêu hướng qua action của controller
// php artisan make:controller Tên Controller

Route::get('list-product', [ProductController::class, 'showProduct']);
// Gửi dữ liệu qua controller
// slug
// http://127.0.0.1:8000/get-product/1
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=4&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);

// Lap 1
Route::get('thongtinsv', [NhtController::class, 'showInfo']);

// http://127.0.0.1:8000/users/create-user
// http://127.0.0.1:8000/users/update-user
// http://127.0.0.1:8000/users/detail-user
// http://127.0.0.1:8000/users/delete-user

Route::group(['prefix' => 'users', 'as' => 'users.'], function(){
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers') ;
    
    Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers') ;
    
    Route::post('add-users', [UserController::class, 'addPostUsers'])->name('addPostUsers') ;
    
    Route::get('delete-users/{userId}', [UserController::class, 'deleteUsers'])->name('deleteUsers') ;

    Route::get('update-users/{userId}', [UserController::class, 'updateUsers'])->name('updateUsers') ;

    Route::post('update-users', [UserController::class, 'updatePostUsers'])->name('updatePostUsers') ;

});

Route::group(['prefix' => 'product', 'as' => 'product.'], function(){
    Route::get('list-product', [ProductBookController::class, 'listProduct'])->name('listProduct') ;
    
    Route::get('add-product', [ProductBookController::class, 'addProduct'])->name('addProduct') ;
    
    Route::post('add-product', [ProductBookController::class, 'addPostProduct'])->name('addPostProduct') ;
    
    Route::get('delete-product/{productId}', [ProductBookController::class, 'deleteProduct'])->name('deleteProduct') ;

    Route::get('update-product/{productId}', [ProductBookController::class, 'updateProduct'])->name('updateProduct') ;

    Route::post('update-product', [ProductBookController::class, 'updatePostProduct'])->name('updatePostProduct') ;

});