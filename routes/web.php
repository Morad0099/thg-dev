<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/thessas_corner', [RouteController::class, 'thessas_corner'])->name('thessas_corner');
Route::get('/lucas_court', [RouteController::class, 'lucas_court'])->name('lucas_court');
Route::get('/hillgrove', [RouteController::class, 'hillgrove'])->name('hillgrove');
Route::get('/hill_rise_villas', [RouteController::class, 'hill_rise_villas'])->name('hill_rise_villas');
Route::get('/queens_park', [RouteController::class, 'queens_park'])->name('queens_park');
