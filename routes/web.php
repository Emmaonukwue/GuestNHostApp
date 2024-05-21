<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApartmentController;
use Illuminate\Support\Facades\Route;

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('apartments/create', [ApartmentController::class, 'create'])->name('apartments.create');
    Route::post('apartments', [ApartmentController::class, 'store'])->name('apartments.store');
    Route::get('apartments', [ApartmentController::class, 'index'])->name('apartments.index');
});