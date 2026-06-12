<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Pastikan semua kolom form kamu sudah terdaftar di sini:
    protected $fillable = [
        'nama_menu',
        'harga',
        'deskripsi',
        'foto', // <-- Pastikan 'foto' wajib ada di sini!
    ];
}
