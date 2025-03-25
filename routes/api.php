<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', AuthController::class . '@login');

Route::group(function () {
    Route::post('/logout', AuthController::class . '@logout');
});

Route::prefix('/users')->group(function () {
    Route::get('/list', UserController::class . '@list');
});
