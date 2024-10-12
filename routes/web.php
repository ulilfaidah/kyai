<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/videodakwah', [App\Http\Controllers\HomeController::class, 'videodakwah'])->name('videodakwah');
Route::get('/jadwalkajian', [App\Http\Controllers\HomeController::class, 'jadwalkajian'])->name('jadwalkajian');
