<?php

// use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\EntriesController;
use App\Http\Controllers\CollectionController;
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
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});

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


// Collections Controller
Route::resource('collections', CollectionController::class);

// Entries Routes
Route::middleware('auth')->group(function () {
    Route::get('/collections/{collection}/entries', EntriesController::class)->name('entries.index');
    Route::get('/collections/{collection}/create', [EntriesController::class, 'create'])->name('entries.create');
    Route::post('/collections/{collection}/store', [EntriesController::class, 'store'])->name('entries.store');
    Route::get('/collections/{collection}/edit/{id}', [EntriesController::class, 'edit'])->name('entries.edit');
    Route::put('/collections/{collection}/update/{id}', [EntriesController::class, 'update'])->name('entries.update');
    Route::get('/collections/{collection}/show/{id}', [EntriesController::class, 'show'])->name('entries.show');
});



// // Navigations Routes
// Route::controller(NavigationController::class)
//     ->prefix('navigations')
//     ->as('navigations.')
//     ->group(function () {
//         Route::get('', 'index')->name('navigations');
//         Route::match(['get', 'post'], '/add', 'add')->name('add');
//         Route::match(['get', 'post'], '/edit/{id?}', 'edit')->name('edit');
//         Route::get('/delete/{id?}', 'delete')->name('delete');
//         Route::get('/table/{slug?}', 'table')->name('table');
//     });

// // Taxonomies Routes
// // Route::controller(TaxonomiesController::class)
// //     ->prefix('taxonomies')
// //     ->as('taxonomies.')
// //     ->group(function () {
// //         Route::get('', 'index')->name('taxonomies');
// //         Route::match(['get', 'post'], '/add', 'add')->name('add');
// //         Route::match(['get', 'post'], '/edit/{id?}', 'edit')->name('edit');
// //         Route::match(['get', 'post'], 'table/{handle?}', 'table')->name('table');
// //         Route::match(['get', 'post'], '/createTerm/{handle?}', 'createTerm')->name('createTerm');
// //         Route::match(['get', 'post'], '/editTerm/{id?}', 'editTerm')->whereNumber('id')->name('editTerm');
// //     });

// // Assets Routes
// Route::controller(AssetsController::class)
//     ->prefix('assets')
//     ->as('assets.')
//     ->group(function () {
//         Route::get('', 'index')->name('assets');
//     });

// // Globals Routes
// Route::controller(GlobalsController::class)
//     ->prefix('globals')
//     ->as('globals.')
//     ->group(function () {
//         Route::get('', 'index')->name('globals');
//         Route::match(['get', 'post'], '/add', 'add')->name('add');
//         Route::match(['get', 'post'], '/edit/{id?}', 'edit')->name('edit');
//         Route::match(['get', 'post'], '/delete/{id?}', 'delete')->name('delete');
//         Route::get('/configure', 'configure')->name('configure');
//     });

// // Fieldsets Routes
// Route::controller(FieldsetsController::class)
//     ->prefix('fieldsets')
//     ->as('fieldsets.')
//     ->group(function () {
//         Route::get('', 'index')->name('fieldsets');
//         Route::get('/add', 'add')->name('add');
//         Route::get('/edit', 'edit')->name('edit');
//         Route::get('/table', 'table')->name('table');
//     });

// // Forms Routes
// Route::controller(FormsController::class)
//     ->prefix('forms')
//     ->as('forms.')
//     ->group(function () {
//         Route::get('', 'index')->name('forms');
//         Route::match(['get', 'post'], '/add', 'add')->name('add');
//         Route::match(['get', 'post'], '/edit/{title?}', 'edit')->name('edit');
//         Route::get('/table', 'table')->name('table');
//         Route::get('/view', 'view')->name('view');
//     });

// // Users Routes
// Route::controller(UsersController::class)
//     ->prefix('users')
//     ->as('users.')
//     ->group(function () {
//         Route::get('', 'index')->name('users');
//         Route::get('/edit', 'edit')->name('edit');
//         Route::get('/table/{id?}', 'table')->name('table');
//         Route::put('/users/{email?}', 'update')->name('update');
//         Route::post('/password/change', 'changePassword')->name('change');
//     });
