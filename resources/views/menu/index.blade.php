@extends('layouts.main')

@section('title', 'Menu Kami')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Varian Rasa Pisang Goreng</h2>
        
        @auth
            <a href="{{ route('menu.create') }}" class="btn btn-primary shadow-sm">
                <i class="fas fa-plus me-1"></i> Tambah Menu (Admin)
            </a>
        @endauth
    </div>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
    @endif

    <div class="row g-4">
        @forelse($menus as $item)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 overflow-hidden">
                
                @if($item->foto && file_exists(public_path('images/' . $item->foto)))
                    <img src="{{ asset('images/' . $item->foto) }}" class="card-img-top" alt="{{ $item->nama_menu }}" style="height: 220px; object-fit: cover;">
                @else
                    <div class="bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 220px;">
                        <div class="text-center text-muted">
                            <i class="fas fa-image fa-3x mb-2"></i>
                            <p class="mb-0 sm-text">Belum ada foto</p>
                        </div>
                    </div>
                @endif

                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title fw-bold text-dark mb-2">{{ $item->nama_menu }}</h5>
                    <p class="card-text text-muted flex-grow-1" style="font-size: 0.95rem;">{{ $item->deskripsi }}</p>
                    
                    <div class="d-flex justify-content-between align-items-center my-3">
                        <span class="text-muted small">Harga satuan</span>
                        <span class="fw-bold text-success fs-5">Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="d-flex gap-2 mt-auto">
                        <a href="https://wa.me/628123456789?text=Saya+mau+pesan+{{ urlencode($item->nama_menu) }}" class="btn btn-success flex-grow-1 shadow-sm" target="_blank">
                            <i class="fab fa-whatsapp me-1"></i> Pesan
                        </a>

                        @auth
                            <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-warning shadow-sm" title="Edit">
                                <i class="fas fa-edit text-white"></i>
                            </a>
                            
                            <form action="{{ route('menu.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus menu ini?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger shadow-sm" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center text-muted py-5">
            <i class="fas fa-utensils fa-3x mb-3 text-secondary"></i>
            <p class="fs-5">Belum ada data menu pisang goreng.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection