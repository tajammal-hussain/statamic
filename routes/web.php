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

// Breeze authentication routes
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

// Collection Routes
Route::controller(CollectionsController::class)
    ->prefix('collections')
    ->as('collections.')
    ->group(function () {
        Route::get('', 'index')->name('collections');
        Route::match(['get', 'post'], '/addCollection', 'addCollection')->name('addCollection');
        Route::get('/editCollection', 'editCollection')->name('editCollection');
        Route::match(['get', 'post'], '/addEntry/{slug?}', 'addEntry')->name('addEntry');
        Route::match(['get', 'post'], '/editEntry/{id?}', 'editEntry')->whereNumber('id')->name('editEntry');
        Route::get('/table/{slug?}', 'table')->name('table');
    });

// Navigations Routes
Route::controller(NavigationController::class)
    ->prefix('navigations')
    ->as('navigations.')
    ->group(function () {
        Route::get('', 'index')->name('navigations');
        Route::match(['get', 'post'], '/add', 'add')->name('add');
        Route::match(['get', 'post'], '/edit/{id?}', 'edit')->name('edit');
        Route::get('/delete/{id?}', 'delete')->name('delete');
        Route::get('/table/{slug?}', 'table')->name('table');
    });

// Taxonomies Routes
Route::controller(TaxonomiesController::class)
    ->prefix('taxonomies')
    ->as('taxonomies.')
    ->group(function () {
        Route::get('', 'index')->name('taxonomies');
        Route::match(['get', 'post'], '/add', 'add')->name('add');
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
        Route::match(['get', 'post'], '/add', 'add')->name('add');
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
        Route::get('/add', 'add')->name('add');
        Route::get('/edit', 'edit')->name('edit');
        Route::get('/table', 'table')->name('table');
        Route::get('/view', 'view')->name('view');
    });

// Users Routes
Route::controller(UsersController::class)
    ->prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('', 'index')->name('users');
        Route::get('/edit', 'edit')->name('edit');
        Route::get('/table/{email?}', 'table')->name('table');
        Route::put('/users/{email?}', 'update')->name('update');
        Route::post('/password/change', 'changePassword')->name('change');
    });
