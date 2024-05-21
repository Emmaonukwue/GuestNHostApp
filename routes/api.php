<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApartmentController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('apartments', [ApartmentController::class, 'store']);
    Route::post('logout', [AuthController::class, 'logout']);
});