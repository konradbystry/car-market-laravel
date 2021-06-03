<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CarMarketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WatchesController;
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



Route::get('/', [CarMarketController::class, 'index']);


Route::get('ad', [AdController::class, 'generateView']);  //temp

Route::get('watches', [WatchesController::class, 'generateView']);

Route::get('auth/login', [LoginController::class, 'generateView']);

Route::get('auth/check', [LoginController::class, 'check'])->name('auth.check');

Route::get('/logout', [CarMarketController::class, 'logout'])->name('logout');
