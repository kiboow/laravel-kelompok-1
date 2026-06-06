<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        // menyusun data yang akan dikirim ke view
        $payload = [
            'title' => 'Beranda Utama',
            'namaAplikasi' => 'Laravel',
            'deskripsi' => 'Selamat datang di aplikasi Laravel kami!',
            'fiturUtama' =>[
                [
                'ikon' => '🚀',
                'judul' => 'Performa Cepat',
                'ket' => 'Dioptimalkan dengan struktur routing Laravel yang efisien.'
                ],
                [
                'ikon' => '🎨',
                'judul' => 'UI Modern',
                'ket' => 'Menggunakan framework CSS untuk tampilan yang bersih dan responsif.'
                ],
                [
                'ikon' => '🔒',
                'judul' => 'Struktur Aman',
                'ket' => 'Kode terpisah dengan baik antara logika bisnis dan tampilan antarmuka.'
                ]
            ]
        ];
        // memanggil file view bernama 'home.blade.php' sambil membawa data
        return view('home', $payload);
    }
}
