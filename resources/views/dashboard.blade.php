@extends('layouts.main')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0 p-3 text-center">
                <div class="my-3">
                    <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-user-shield fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">{{ Auth::user()->name }}</h5>
                    <small class="text-muted">{{ Auth::user()->email }}</small>
                </div>
                <hr class="text-muted">
                <div class="list-group list-group-flush text-start">
                    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active border-0 rounded mb-1">
                        <i class="fas fa-chart-line me-2"></i> Ringkasan Utama
                    </a>
                    <a href="{{ route('menu.index') }}" class="list-group-item list-group-item-action border-0 rounded">
                        <i class="fas fa-utensils me-2"></i> Kelola Menu Pisang
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card shadow-sm border-0 bg-dark text-white p-4 mb-4 position-relative overflow-hidden" style="border-radius: 15px;">
                <div class="position-relative" style="z-index: 2;">
                    <h2 class="fw-bold mb-2">Selamat Datang Kembali</h2>
                    <p class="mb-0 text-white-50">Sistem manajemen Pisjai.oi</p>
                </div>
                <i class="fas fa-store position-absolute" style="right: -20px; bottom: -20px; font-size: 150px; color: rgba(255,255,255,0.05);"></i>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted text-uppercase small mb-1 fw-bold">Manajemen Produk</h6>
                                <h3 class="fw-bold text-dark mb-0">CRUD Aktif</h3>
                            </div>
                            <div class="bg-primary-subtle text-primary p-3 rounded-3">
                                <i class="fas fa-tasks fa-2x"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('menu.index') }}" class="btn btn-outline-primary btn-sm w-100 rounded-pill">Buka Katalog Menu</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted text-uppercase small mb-1 fw-bold">Keamanan Akun</h6>
                                <h3 class="fw-bold text-success mb-0">Sesi Aman</h3>
                            </div>
                            <div class="bg-success-subtle text-success p-3 rounded-3">
                                <i class="fas fa-lock fa-2x"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm w-100 rounded-pill" onclick="return confirm('Yakin ingin keluar dari panel admin?')">
                                    <i class="fas fa-sign-out-alt me-1"></i> Keluar / Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection