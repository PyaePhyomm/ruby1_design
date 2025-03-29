<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CustomerController::class,'index']);

Route::get('/room',[RoomController::class,'index']);