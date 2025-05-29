<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;

Route::name('admin.')->controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});