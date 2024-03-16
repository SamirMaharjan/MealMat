<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DieticianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class,'post_login'])->name('post_login');


Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/create-user', [HomeController::class,'create'])->name('create-user');
Route::get('/edit-user/{id}', [HomeController::class,'edit'])->name('edit-user');
Route::post('/update-user', [HomeController::class,'update'])->name('update-user');
Route::post('/store-user', [HomeController::class,'store'])->name('store-user');

Route::get('/dietician', [DieticianController::class,'index'])->name('index-dietician');
Route::get('/create-dietician', [DieticianController::class,'create'])->name('create-dietician');
Route::get('/edit-dietician/{id}', [DieticianController::class,'edit'])->name('edit-dietician');
Route::post('/update-dietician', [DieticianController::class,'update'])->name('update-dietician');
Route::post('/store-dietician', [DieticianController::class,'store'])->name('store-dietician');


Route::get('/product', [ProductController::class,'index'])->name('index-product');
Route::get('/create-product', [ProductController::class,'create'])->name('create-product');
Route::get('/edit-product/{id}', [ProductController::class,'edit'])->name('edit-product');
Route::post('/update-product', [ProductController::class,'update'])->name('update-product');
Route::post('/store-product', [ProductController::class,'store'])->name('store-product');

