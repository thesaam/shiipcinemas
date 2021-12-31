<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\RegisterController;

/*
|---------- ----------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/shows', ShowController::class);  

Auth::routes();

Route::get('/shows', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/shows', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/shows', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/shows', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
