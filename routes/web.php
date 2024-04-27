<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/', function () {
//     return view('login');
// })->name("login");
