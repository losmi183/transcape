<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReleasesController;
use App\Http\Controllers\AdminReleasesController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomepageController::class, 'index']);

Route::get('/releases', [ReleasesController::class, 'index']);
Route::get('/releases/{release}', [ReleasesController::class, 'show']);

Route::get('/artists', [ArtistsController::class, 'index']);
Route::get('/artists/liveacts', [ArtistsController::class, 'indexLiveacts']);
Route::get('/artists/djs', [ArtistsController::class, 'indexDjs']);

Route::get('/artists/{slug}', [ArtistsController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**
 * Admin Routes
 */
Route::prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, 'index']);
    
    Route::get('/releases', [AdminReleasesController::class, 'index'])->name('admin.releases');
    Route::get('/releases/create', [AdminReleasesController::class, 'create']);
    Route::post('/releases', [AdminReleasesController::class, 'store']);

});