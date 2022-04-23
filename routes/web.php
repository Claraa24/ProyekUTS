<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\DashboardProductsController;
use App\Http\Controllers\DashboardJumbotronController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/',[FrontController::class,'index']);

Route::get('/',[Controller::class,'index']);
Route::get('/daftar_produk',[daftarController::class,'index']);

Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'authenticate']);
Route::post('/logout',[loginController::class,'logout']);

Route::get('/register',[registerController::class,'index'])->middleware('guest');
Route::post('/register',[registerController::class,'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/products', DashboardProductsController::class)->middleware('auth');
Route::resource('/dashboard/jumbotron', DashboardJumbotronController::class)->middleware('auth');
Route::resource('/dashboard/about', AboutController::class)->middleware('auth');
