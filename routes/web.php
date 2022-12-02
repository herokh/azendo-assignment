<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LocationController;
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


// PUBLIC AREA
Route::get('/', [FrontendController::class, 'index']);

// ADMIN AREA
Route::get('admin', [AdminController::class, 'index'])->middleware('auth');

Route::resource('admin/location', LocationController::class)->middleware('auth');

// AUTH
Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('authenticate', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
