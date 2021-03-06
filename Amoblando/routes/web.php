<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Product\ProductController;




Route::get('/', function () {
    return view('welcome');
});

Route::resource('escritorio',dashboardController::class);
Route::resource('perfil',dashboardController::class);




Route::get( 'login',[loginController::class,'form_login'])->name('login.form_login');
Route::post( 'auth',[loginController::class,'auth'])->name('login.auth');


Route::resource('product',ProductController::class);




