<?php

use App\Http\Controllers\CarnetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserCarnetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard')->with(['title' => 'Dashboard']);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::name('carnets.')->prefix('carnets')->group(function () {
        Route::get('', [CarnetController::class, 'index'])
            ->name('index')
            ->middleware(['permission:carnets.index']);
        Route::get('add', [CarnetController::class, 'add'])
            ->name('add')
            ->middleware(['permission:carnets.store']);
        Route::post('add', [CarnetController::class, 'store'])
            ->name('store')
            ->middleware(['permission:carnets.store']);
        Route::get('{carnet}/edit', [CarnetController::class, 'edit'])
            ->where('carnet', '[0-9]+')
            ->name('edit')
            ->middleware(['permission:carnets.store']);
        Route::patch('{carnet}/edit', [CarnetController::class, 'update'])
            ->where('carnet', '[0-9]+')
            ->name('update')
            ->middleware(['permission:carnets.store']);
    });
    Route::name('clients.')->prefix('clients')->group(function () {
        Route::get('', [ClientController::class, 'index'])
            ->name('index')
            ->middleware(['permission:clients.index']);
        Route::post('/datatable', [ClientController::class, 'dataTable'])
            ->name('datatable')
            ->middleware(['permission:clients.index']);
        Route::get('/add', [ClientController::class, 'add'])
            ->name('add')
            ->middleware(['permission:clients.store']);
        Route::post('/add', [ClientController::class, 'store'])
            ->name('store')
            ->middleware(['permission:clients.store']);
        Route::get('{client}/edit', [ClientController::class, 'edit'])
            ->where('client', '[0-9]+')
            ->name('edit')
            ->middleware(['permission:clients.store']);
        Route::patch('{client}/edit', [ClientController::class, 'update'])
            ->where('client', '[0-9]+')
            ->name('update')
            ->middleware(['permission:clients.store']);
    });
    Route::name('contracts.')->prefix('contracts')->group(function () {
        Route::get('', [UserCarnetController::class, 'index'])
            ->name('index')
            ->middleware(['permission:contracts.index']);
        Route::post('/datatable', [UserCarnetController::class, 'dataTable'])
            ->name('datatable')
            ->middleware(['permission:contracts.index']);
        Route::get('/add', [UserCarnetController::class, 'add'])
            ->name('add')
            ->middleware(['permission:contracts.store']);
        Route::post('/add', [UserCarnetController::class, 'store'])
            ->name('store')
            ->middleware(['permission:contracts.store']);
    });
});