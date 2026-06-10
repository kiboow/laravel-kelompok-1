@extends('layouts.app')

@section('title', 'Menu Kami')

@section('content')
<div class="container my-5">
    <h2 class="text-center fw-bold mb-4">Varian Rasa Pisang Jaya</h2>
    <p class="text-center text-muted mb-5">Pilih rasa favoritmu dan rasakan sensasi lumer di setiap gigitan!</p>

    <div class="row g-4">
        @forelse($menus as $item)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('image/' . $item->foto) }}" class="card-img-top" alt="{{ $item->nama_menu }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <span class="badge bg-warning text-dark mb-2">Best Seller</span>
                    <h5 class="card-title fw-bold">{{ $item->nama_menu }}</h5>
                    <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <span class="fw-bold text-success fs-5">Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                        <a href="https://wa.me/628123456789?text=Halo,%20saya%20mau%20pesan%20{{ urlencode($item->nama_menu) }}" target="_blank" class="btn btn-success btn-sm">
                            <i class="fab fa-whatsapp me-1"></i> Pesan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center text-muted py-5">
            <p>Belum ada data menu di database. Silakan isi tabel `menus` terlebih dahulu.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection