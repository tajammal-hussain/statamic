<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CollectionsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::get('/forgotPassword', [AuthController::class, 'forgotPassword'])->name('forgot');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/collections', [CollectionsController::class, 'index'])->name('collections');

Route::get('/news', [CollectionsController::class, 'news'])->name('news');

// Route::get('/', function () {
//     return view('login');
// })->name("login");
