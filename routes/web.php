<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimoniController;

// Route Halaman 1 (Orang Pertama)
Route::get('/', [BerandaController::class, 'index']);

// Route Halaman 2 (Orang Kedua)
Route::get('/menu', [MenuController::class, 'index']);

// Route Halaman 3 (Orang Ketiga)
Route::get('/testimoni', [TestimoniController::class, 'index']);
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
