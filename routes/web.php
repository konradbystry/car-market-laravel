<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CarMarketController;
use App\Http\Controllers\CreateAdController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserPanelController;
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

use App\Models\Car;
use App\Models\User;


Route::get('/', [CarMarketController::class, 'index'])->name('index');
Route::get('/search', [CarMarketController::class, 'search'])->name('search');

//auth

Route::get('auth/login', [LoginController::class, 'generateView'])->name('login');

Route::get('auth/register', [RegisterController::class, 'generateView']);

Route::get('auth/check', [LoginController::class, 'check'])->name('auth.check');

Route::get('auth/save', [RegisterController::class, 'save'])->name('auth.save');

Route::get('/logout', [CarMarketController::class, 'logout'])->name('logout');

//ads

Route::get('ad/{id}', [AdController::class, 'show'])->name('show');

Route::get('ad/{id}/watch', [AdController::class, 'addToWatches'])->name('ad.watch')->middleware('CheckUser');

//watches

Route::get('watches', [WatchesController::class, 'generateView'])->name('watches')->middleware('CheckUser');

Route::get('watches/unwatch/{id}', [WatchesController::class, 'unwatch'])->name('watches.unwatch')->middleware('CheckUser');

//create ad

Route::get('create-ad', [CreateAdController::class, 'generateView'])->middleware('CheckUser');
Route::post('create-ad/upload', [CreateAdController::class, 'create'])->name('create-ad.upload')->middleware('CheckUser');

//UserPanel

Route::get('/user', [UserPanelController::class, 'generateView'])->name('user')->middleware('CheckUser');
Route::get('user/{id}/remove', [UserPanelController::class, 'remove'])->name('user.car.remove')->middleware('CheckUser');
Route::get('user/{id}', [UserPanelController::class, 'show'])->name('user.car.show')->middleware('CheckUser');
