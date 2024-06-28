<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', [RoomController::class, 'index']);
Route::view('/about', 'about')->name('about');
Route::get('/rooms', [RoomController::class, 'rooms']);
Route::get('/roomDetails/{id}', [RoomController::class, 'show'])->name('roomDetails');
Route::view('/offers', 'offers')->name('offers');
Route::view('/contact', 'contact')->name('contact');