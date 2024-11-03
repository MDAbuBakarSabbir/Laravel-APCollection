<?php

use App\Http\Controllers\DressController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/orders',OrdersController::class);
Route::resource('/dress',DressController::class);
