<?php

use \App\Http\Controllers\ErecordsController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ReportsController;
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
Route::get('/', [ErecordsController::class, 'index'])->name('index');
Route::resource('erecords', ErecordsController::class);
Route::resource('reports', ReportsController::class);
//Route::resource('dashboard', DashboardController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
