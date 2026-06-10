<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimoniController;

// Halaman Utama
Route::get('/', [BerandaController::class, 'index'])->name('home');

// Halaman Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Halaman Testimoni
Route::get('/testimoni', [TestimoniController::class, 'index']);
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
