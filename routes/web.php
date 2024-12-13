<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::resource('cvs', CVController::class)->middleware('auth');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

