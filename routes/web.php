<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', [RoomController::class, 'index']);
Route::get('/rooms', [RoomController::class, 'rooms']);
Route::get('/roomDetails/{id}', [RoomController::class, 'show'])->name('roomDetails');
