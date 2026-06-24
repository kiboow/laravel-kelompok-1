<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * DISPLAY: Menampilkan daftar semua menu pisang goreng.
     * Halaman ini bisa diakses oleh publik/semua orang.
     */
    public function index()
    {
        $menus = Menu::latest()->get();
        return view('menu.index', compact('menus'));
    }

    /**
     * CREATE: Menampilkan halaman form tambah menu baru.
     * Hanya boleh diakses oleh Admin (Sudah Login).
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * STORE: Menyimpan data menu baru dari form ke database.
     * Hanya boleh diakses oleh Admin (Sudah Login).
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['foto'] = $filename;
        }

        Menu::create($data);

        return redirect()->route('menu.index')->with('success', 'Menu baru berhasil ditambahkan!');
    }

    /**
     * SHOW: Menampilkan detail dari satu menu (Opsional, boleh dikosongkan).
     */
    public function show(string $id)
    {
        // Kosongkan saja jika tidak dipakai untuk tugas ini
    }

    /**
     * EDIT: Menampilkan halaman form untuk mengedit menu lama.
     * Hanya boleh diakses oleh Admin (Sudah Login).
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    /**
     * UPDATE: Menyimpan perubahan data menu ke database.
     * Hanya boleh diakses oleh Admin (Sudah Login).
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_foto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $nama_foto);

            if ($menu->foto && file_exists(public_path('images/' . $menu->foto))) {
                @unlink(public_path('images/' . $menu->foto));
            }

            $data['foto'] = $nama_foto;
        } else {
            $data['foto'] = $menu->foto;
        }

        $menu->update($data);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui!');
    }

    /**
     * DESTROY: Menghapus data menu dari database.
     * Hanya boleh diakses oleh Admin (Sudah Login).
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus!');
    }
}