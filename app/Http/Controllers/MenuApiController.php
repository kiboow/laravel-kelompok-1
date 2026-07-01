<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Http\Resources\MenuApiResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuApiController extends Controller
{
    public function index()
    {
        // Meniru halaman 4: Mengambil data terbaru dengan paginasi (10 data per halaman)
        $menus = Menu::latest()->paginate(10);
        return MenuApiResource::collection($menus);
    }

    public function store(Request $request)
    {
        // Meniru halaman 4: Validasi input request data baru
        $validator = Validator::make($request->all(), [
            'nama_menu' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga'     => 'required|numeric|min:0',
            'foto'      => 'nullable|string', // Menyesuaikan kolom foto proyekmu
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $menu = Menu::create($request->all());

        // Meniru halaman 4: Return resource dengan tambahan message & status code 201
        return (new MenuApiResource($menu))
            ->additional(['message' => 'Menu created successfully'])
            ->response()
            ->setStatusCode(201);
    }

    public function show(Menu $menu)
    {
        // Meniru halaman 4: Menampilkan detail satu data berdasarkan ID
        return new MenuApiResource($menu);
    }

    public function update(Request $request, Menu $menu)
    {
        // Meniru halaman 4-5: Validasi update menggunakan aturan 'sometimes'
        $validator = Validator::make($request->all(), [
            'nama_menu' => 'sometimes|required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga'     => 'sometimes|required|numeric|min:0',
            'foto'      => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $menu->update($request->all());

        // Meniru halaman 5: Return resource dengan pesan sukses update
        return (new MenuApiResource($menu))
            ->additional(['message' => 'Menu updated successfully']);
    }

    public function destroy(Menu $menu)
    {
        // Meniru halaman 5: Menghapus data dan mengembalikan response JSON
        $menu->delete();
        return response()->json(['message' => 'Menu deleted successfully'], 200);
    }
}