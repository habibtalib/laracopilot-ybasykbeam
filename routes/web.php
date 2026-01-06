<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuideController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/guides', [GuideController::class, 'index'])->name('guides.index');