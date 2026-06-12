@extends('layouts.main')

@section('title', 'Login Admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-4 mt-5">
                <h3 class="fw-bold text-center text-dark mb-4">Login Admin Pisjai</h3>

                @if ($errors->any())
                    <div class="alert alert-danger py-2 small shadow-sm">
                        @foreach ($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3 form-check d-flex justify-content-between">
                        <div>
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label small text-muted" for="remember">Ingat Saya</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning w-100 text-white fw-bold shadow-sm">Masuk</button>
                </form>
                
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}" class="small text-muted text-decoration-none">Belum punya akun? Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection