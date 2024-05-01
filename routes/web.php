<?php

use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\TaxonomiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FieldsetsController;
use App\Http\Controllers\GlobalsController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

// Route for the root URL
Route::redirect('/', '/login');

// Route To Logout user
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Authentication Routes
Route::controller(AuthController::class)
    ->prefix('auth')
    ->as('auth.')
    ->group(function () {
        Route::get('/', 'index')->name('login');
        Route::get('/forgotPassword', 'forgotPassword')->name('forgot');
    });


// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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
        Route::get('/add', 'add')->name('add');
        Route::get('/edit', 'edit')->name('edit');
        Route::get('/table', 'table')->name('table');
        Route::get('/createTeam', 'createTeam')->name('createTeam');
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
        Route::get('/add', 'add')->name('add');
        Route::get('/edit', 'edit')->name('edit');
        Route::get('/configure', 'configure')->name('configure');
    });

// Fieldsets Routes
Route::controller(FieldsetsController::class)
    ->prefix('fieldsets')
    ->as('fieldsets.')
    ->group(function () {
        Route::get('', 'index')->name('fieldsets');
        Route::get('/add', 'add')->name('add');

    });

// Forms Routes
Route::controller(FormsController::class)
    ->prefix('forms')
    ->as('forms.')
    ->group(function () {
        Route::get('', 'index')->name('forms');
    });

// Users Routes
Route::controller(UsersController::class)
    ->prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('', 'index')->name('users');
    });
