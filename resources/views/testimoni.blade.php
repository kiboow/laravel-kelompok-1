@extends('layouts.app')

@section('title', 'Testimoni & Kontak')

@section('content')
<div class="container my-5">
    <div class="row g-5">
        <div class="col-md-5">
            <div class="p-4 bg-white rounded shadow-sm">
                <h4 class="fw-bold mb-4">Berikan Ulasan Anda</h4>
                
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('testimoni.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <select name="rating" class="form-select" required>
                            <option value="5">⭐⭐⭐⭐⭐ (Sangat Puas)</option>
                            <option value="4">⭐⭐⭐⭐ (Puas)</option>
                            <option value="3">⭐⭐⭐ (Cukup)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan / Kritik / Saran</label>
                        <textarea name="pesan" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-banana w-100">Kirim Testimoni</button>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <h4 class="fw-bold mb-4">Apa Kata Mereka?</h4>
            <div class="row g-3" style="max-height: 400px; overflow-y: auto;">
                @forelse($testimonis as $t)
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="fw-bold mb-1">{{ $t->nama }}</h6>
                            <small class="text-warning">
                                @for($i=0; $i<$t->rating; $i++) ⭐ @endfor
                            </small>
                            <p class="card-text text-muted mt-2">"{{ $t->pesan }}"</p>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-muted">Belum ada ulasan masuk. Jadilah yang pertama!</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection