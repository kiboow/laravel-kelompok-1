<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari model Menu
        $menus = Menu::all();
        // Mengirimkan data ke view bernama 'menu'
        return view('menu', compact('menus'));
    }
}