<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Menu Pisjay
Route::get('/menu', [MenuController::class, 'index'])->name('menu');