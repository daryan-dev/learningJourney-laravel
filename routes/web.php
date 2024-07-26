<?php

use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::get('profile',[profileController::class,'index']);

