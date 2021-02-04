<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReleasesController;

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
Route::get('/artists/{slug}', [ArtistsController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
