<?php

use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\TaxonomiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GlobalsController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
        Route::get('/add', 'add')->name('add');
        Route::get('/edit', 'edit')->name('edit');
        Route::get('/table', 'table')->name('table');
    });

// Taxonomies Routes
Route::controller(TaxonomiesController::class)
    ->prefix('taxonomies')
    ->as('taxonomies.')
    ->group(function () {
        Route::get('', 'index')->name('taxonomies');
    });

// Assets Routes
Route::controller(AssetsController::class)
    ->prefix('assets')
    ->as('assets.')
    ->group(function () {
        Route::get('', 'index')->name('assets');
    });

// Globals Routes
Route::controller(GlobalsController::class)
    ->prefix('globals')
    ->as('globals.')
    ->group(function () {
        Route::get('', 'index')->name('globals');
    });
