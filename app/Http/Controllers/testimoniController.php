<?php

namespace App\Http\Controllers;

use App\Models\Testimoni; // Asumsi membuat model Testimoni
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        $testimonis = Testimoni::latest()->get(); // Mengambil testimoni terbaru
        return view('testimoni', compact('testimonis'));
    }

    public function store(Request $request) {
        // Validasi input data (Poin penting saat presentasi)
        $request->validate([
            'nama' => 'required|string|max:50',
            'pesan' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5'
        ]);

        // Simpan ke Database
        Testimoni::create($request->all());

        return redirect()->back()->with('success', 'Terima kasih atas ulasan Anda!');
    }
}