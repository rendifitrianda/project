<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\HomeController; 






Route::prefix('admin')->middleware('auth')->group(function () {


    Route::get('beranda', [BerandaController::class, 'index']);
    Route::get('register', [RegisterController::class, 'register']);



    Route::post('produk/filter', [ProdukController::class, 'filter']);
    
    Route::get('produk', [ProdukController::class, 'index']); 
    Route::get('produk/create', [ProdukController::class, 'create']); 
    Route::post('produk', [ProdukController::class, 'store']); 
    Route::get('produk/show/{produk}', [ProdukController::class, 'show']);
    Route::get('produk/edit/{produk}', [ProdukController::class, 'edit']);
    Route::post('produk/{produk}', [ProdukController::class, 'update']);
    Route::delete('produk/{produk}', [ProdukController::class, 'delete']);
    
    Route::get('kategori', [KategoriController::class, 'index']);
    Route::get('kategori/create', [KategoriController::class, 'create']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::get('kategori/show/{kategori}', [KategoriController::class, 'show']);
    Route::get('kategori/edit/{kategori}', [KategoriController::class, 'edit']);
    Route::post('kategori/{kategori}', [KategoriController::class, 'update']);
    Route::delete('kategori/{kategori}', [KategoriController::class, 'delete']);
    
    Route::get('user', [UserController::class, 'index']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/show/{user}', [UserController::class, 'show']);
    Route::get('user/edit/{user}', [UserController::class, 'edit']);
    Route::post('user/{user}', [UserController::class, 'update']);
    Route::delete('user/{user}', [UserController::class, 'delete']);

});


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('test-collection', [HomeController::class, 'testCollection']);