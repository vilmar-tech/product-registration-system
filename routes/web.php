<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

Route::resource('/products', ProductController::class);

//Route::get('/', function () {
    //return view('dashboard');
//});

Route::fallback(function() {
    return "Nenhuma rota existe";
});

//Route::get('/',[UserController::class,'login'])->name('login.page');

Route::post('/auth',[UserController::class,'auth'])->name('auth.user');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[AuthController::class,'dashboard'])->name('admin');
