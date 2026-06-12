@extends('layouts.main')

@section('title', 'Edit Menu')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="fw-bold text-dark mb-4 text-center">Edit Varian Menu</h3>

                <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data" id="form-edit-menu">
                    @csrf
                    @method('PUT') 

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Varian Rasa</label>
                        <input type="text" name="nama_menu" class="form-control" value="{{ $menu->nama_menu }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" value="{{ $menu->harga }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Foto Produk Saat Ini</label>
                        <div class="mb-2">
                            @if($menu->foto && file_exists(public_path('images/' . $menu->foto)))
                                <img src="{{ asset('images/' . $menu->foto) }}" class="img-thumbnail" style="max-height: 150px; object-fit: cover;">
                            @else
                                <span class="text-muted d-block small bg-light p-2 rounded">Belum ada foto produk lama</span>
                            @endif
                        </div>
                        
                        <label class="form-label fw-semibold">Ganti Foto Baru (Opsional)</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                        <div class="form-text">Biarkan kosong jika tidak ingin mengubah foto produk.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi Menu</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required>{{ $menu->deskripsi }}</textarea>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" form="form-edit-menu" class="btn btn-warning text-white flex-grow-1 fw-bold shadow-sm">
                            <i class="fas fa-save me-1"></i> Perbarui Menu
                        </button>
                        <a href="{{ route('menu.index') }}" class="btn btn-secondary shadow-sm">Batal</a>
                    </div>

                </form> 
                </div>
        </div>
    </div>
</div>
@endsection