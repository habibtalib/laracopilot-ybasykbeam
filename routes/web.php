<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TouristController;

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

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/destinations', [AdminController::class, 'destinations'])->name('admin.destinations');
Route::get('/admin/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

// Tourist Routes
Route::get('/tourist', [TouristController::class, 'index'])->name('tourist.index');
Route::get('/tourist/details', [TouristController::class, 'details'])->name('tourist.details');