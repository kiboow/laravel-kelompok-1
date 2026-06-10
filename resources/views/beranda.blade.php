@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="p-5 mb-4 bg-banana text-dark rounded-3 shadow-sm">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold">Pisjay.oi</h1>
        <p class="fs-4">Dibuat dari pisang raja pilihan dengan balutan tepung premium dan toping melimpah.</p>
        <a href="{{ url('/menu') }}" class="btn btn-dark btn-lg px-4 shadow-sm">Lihat Menu Sekarang</a>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center g-4">
        <div class="col-md-4">
            <div class="p-4 bg-white rounded shadow-sm">
                <i class="fas fa-thumbs-up fa-3x text-warning mb-3"></i>
                <h3 class="fw-bold">100% Krispi</h3>
                <p class="text-muted">Tetap renyah dan kriuk walaupun sudah dingin.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded shadow-sm">
                <i class="fas fa-utensils fa-3x text-warning mb-3"></i>
                <h3 class="fw-bold">10+ Toping</h3>
                <p class="text-muted">Mulai dari Choco Crunchy, Matcha, hingga Keju Susu.</p>
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
@endsection