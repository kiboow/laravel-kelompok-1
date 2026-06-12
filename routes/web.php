<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimoniController;

// Rute Publik
Route::get('/', [BerandaController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index'); // Halaman daftar menu publik
Route::resource('/testimoni', TestimoniController::class);

// Rute Khusus Admin (Wajib Login)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Kelola sisa aksi CRUD (create, store, edit, update, destroy) tanpa mengganggu rute index publik di atas
    Route::resource('menu', MenuController::class)->except(['index']);
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';