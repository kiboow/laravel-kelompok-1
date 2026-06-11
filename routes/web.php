<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimoniController;

// Halaman Utama
Route::get('/', [BerandaController::class, 'index']);

// Halaman Menu
Route::get('/menukami', [MenuController::class, 'index']);

// Halaman Testimoni
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
