<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterUserController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterUserController::class, 'store'])->middleware('guest');

Route::get('/login' , [SessionController::class, 'create'] )->middleware('guest');
Route::post('/login' , [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout' , [SessionController::class, 'destroy'])->middleware('auth')->name('logout');
