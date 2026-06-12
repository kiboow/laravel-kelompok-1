@extends('layouts.main')

@section('title', 'Daftar Akun Admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 p-4 mt-4">
                <h3 class="fw-bold text-center text-dark mb-4">Daftar Admin Baru</h3>

                @if ($errors->any())
                    <div class="alert alert-danger py-2 small shadow-sm">
                        @foreach ($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold shadow-sm">Daftar Akun</button>
                </form>
                
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="small text-muted text-decoration-none">Sudah punya akun? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection