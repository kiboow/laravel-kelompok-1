@extends('layouts.main')

@section('title', 'Tambah Menu Baru')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4 border-0">
                <h4 class="fw-bold mb-4">Tambah Menu Pisang Goreng</h4>

                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Varian Rasa</label>
                        <input type="text" name="nama_menu" class="form-control" placeholder="Contoh: Pisang Goreng Matcha Lumer">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" placeholder="Contoh: 15000">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Menu</label>
                        <textarea name="deskripsi" class="form-control" rows="3" placeholder="Jelaskan kelezatan topingnya di sini..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Produk (Pisang Goreng)</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                        <div class="form-text">Gunakan format gambar (jpg, jpeg, png).</div>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-grow-1">Simpan Menu</button>
                        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection