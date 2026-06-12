@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="p-5 mb-4 bg-banana text-dark rounded-3 shadow-sm">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold">Pisang Jaya</h1>
        <p class="fs-4">Dibuat dari pisang raja pilihan dengan balutan tepung premium dan toping melimpah.</p>
        <a href="{{ url('/menu') }}" class="btn btn-dark btn-lg px-4 shadow-sm">Lihat Menu Sekarang</a>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center g-4">
        <div class="col-md-4">
            <div class="p-4 bg-white rounded shadow-sm">
                <i class="fas fa-thumbs-up fa-3x text-warning mb-3"></i>
                <h3 class="fw-bold">Krispi</h3>
                <p class="text-muted">Renyah dan kriuk ketika disajikan ketika hangat.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white rounded shadow-sm">
                <i class="fas fa-utensils fa-3x text-warning mb-3"></i>
                <h3 class="fw-bold">Tersedia Enam Toping</h3>
                <p class="text-muted">Mulai dari Chocolate Keju, Tiramisu, dan lainnya.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white rounded shadow-sm">
                <i class="fas fa-fire fa-3x text-warning mb-3"></i>
                <h3 class="fw-bold">Selalu Hangat</h3>
                <p class="text-muted">Digoreng dadakan langsung saat kamu memesan.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
     <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="https://wa.me/628123456789?text=Halo%20Pisjay.oi,%20saya%20mau%20tanya%20tentang%20menunya" 
            target="_blank" 
            class="btn btn-success btn-lg px-4 py-2 shadow d-flex align-items-center gap-2"
            style="background-color: #25D366; border: none;">
            <i class="fab fa-whatsapp fs-4"></i>
            <span>WhatsApp</span>
        </a>

        <a href="https://instagram.com/username_toko" 
            target="_blank" 
            class="btn btn-danger btn-lg px-4 py-2 shadow d-flex align-items-center gap-2"
            style="background-image: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); border: none;">
            <i class="fab fa-instagram fs-4"></i>
            <span>Instagram</span>
        </a>
     </div>
</div>
@endsection