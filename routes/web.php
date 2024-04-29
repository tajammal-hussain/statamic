<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\NavigationController;

// Route for the root URL
Route::redirect('/', '/auth');

// Authentication Routes
Route::controller(AuthController::class)
    ->prefix('auth')
    ->as('auth.')
    ->group(function () {
        Route::get('/', 'index')->name('login');
        Route::get('/forgotPassword', 'forgotPassword')->name('forgot');
    });


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Collection Routes
Route::controller(CollectionsController::class)
    ->prefix('collections')
    ->as('collections.')
    ->group(function () {
        Route::get('', 'index')->name('collections');
        Route::get('/news', 'news')->name('news');
        Route::get('/add', 'add')->name('add');
        Route::get('/edit', 'edit')->name('edit');
        Route::get('/table', 'table')->name('table');
    });

// Navigations Routes
Route::controller(NavigationController::class)
    ->prefix('navigations')
    ->as('navigations.')
    ->group(function () {
        Route::get('', 'index')->name('navigations');
    });
