<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pageController;

Route::get('/', [pageController::class, 'login'])->name('login');
Route::post('/login', [pageController::class, 'keLogin'])->name('keLogin');
Route::get('/logout', [pageController::class, 'logout'])->name('logout');
Route::get('/profile', [pageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [DashboardController::class, 'pengelolaan'])->name('pengelolaan');
