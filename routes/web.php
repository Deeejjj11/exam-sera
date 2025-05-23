<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
