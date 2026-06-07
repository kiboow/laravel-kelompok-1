<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'namaAplikasi' => 'laravel',
            'deskripsi' => 'Deskripsi singkat tentang aplikasi ini.',
            'fiturUtama' => [
                ['ikon' => '🚀', 'judul' => 'Fitur 1', 'ket' => 'Keterangan fitur 1'],
                ['ikon' => '💻', 'judul' => 'Fitur 2', 'ket' => 'Keterangan fitur 2'],
                ['ikon' => '🛡️', 'judul' => 'Fitur 3', 'ket' => 'Keterangan fitur 3'],
            ]
        ];

        return view('home', $data);
    }
}