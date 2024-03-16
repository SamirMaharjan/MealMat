<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DieticianController;
use App\Http\Controllers\HomeController;
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
});
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

