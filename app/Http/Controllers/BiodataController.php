<?php

namespace App\Http\Controllers;

class BiodataController extends Controller
{
  public function index()
  {
    $biodata = [
      'nama' => 'Azhar Sabiq',
      'nim' => 'F1A250003',
      'prodi' => 'Teknik Informatika',
      'alamat' => 'Jl. Sukarajin 1'
    ];
    return view('biodata', compact('biodata'));
  }
}
