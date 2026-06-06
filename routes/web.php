<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// mengarahkan ke halaman utama (/) ke HomeController method index
Route::get('/', [HomeController::class, 'index'])->name('home');