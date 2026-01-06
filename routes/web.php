<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TouristGuideController;
use App\Http\Controllers\TravelAgencyController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ReviewController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tourist-guides', [TouristGuideController::class, 'index'])->name('tourist-guides.index');
Route::get('/tourist-guides/{id}', [TouristGuideController::class, 'show'])->name('tourist-guides.show');
Route::get('/travel-agencies', [TravelAgencyController::class, 'index'])->name('travel-agencies.index');
Route::get('/travel-agencies/{id}', [TravelAgencyController::class, 'show'])->name('travel-agencies.show');

// Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/tourist-guides', [AdminController::class, 'touristGuides'])->name('admin.tourist-guides');
Route::get('/admin/travel-agencies', [AdminController::class, 'travelAgencies'])->name('admin.travel-agencies');
Route::get('/admin/tourists', [AdminController::class, 'tourists'])->name('admin.tourists');
Route::get('/admin/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::get('/admin/reviews', [AdminController::class, 'reviews'])->name('admin.reviews');

// Tourist Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/tourist/dashboard', [TouristController::class, 'dashboard'])->name('tourist.dashboard');
    Route::get('/tourist/bookings', [TouristController::class, 'bookings'])->name('tourist.bookings');
    Route::get('/tourist/chats', [TouristController::class, 'chats'])->name('tourist.chats');
    Route::get('/tourist/reviews', [TouristController::class, 'reviews'])->name('tourist.reviews');
});

// Booking Routes
Route::post('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

// Chat Routes
Route::post('/chats/send', [ChatController::class, 'send'])->name('chats.send');
Route::get('/chats/{booking_id}', [ChatController::class, 'show'])->name('chats.show');

// Review Routes
Route::post('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');