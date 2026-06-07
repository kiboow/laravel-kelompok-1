<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - {{ $namaAplikasi }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
            padding: 100px 0;
        }
        .feature-card {
            transition: transform 0.2s;
            border: none;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="{{ url('/') }}">{{ $namaAplikasi }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#fitur') }}">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center shadow-inner">
        <div class="container">
            <h1 class="display-4 fw-extrabold mb-3">{{ $namaAplikasi }}</h1>
            <p class="lead mx-auto text-light-50" style="max-width: 700px;">{{ $deskripsi }}</p>
            <div class="mt-4">
                <a href="#fitur" class="btn btn-info btn-lg px-4 me-2 fw-bold text-white">Jelajahi Fitur</a>
                <a href="#" class="btn btn-outline-light btn-lg px-4">Dokumentasi</a>
            </div>
        </div>
    </header>

    <main id="fitur" class="container my-5 py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Mengapa Memilih Sistem Ini?</h2>
            <p class="text-muted">Kelebihan dari struktur pengerjaan tugas minggu ini.</p>
        </div>

        <div class="row g-4">
            @foreach($fiturUtama as $fitur)
                <div class="col-md-4">
                    <div class="card h-100 p-4 shadow-sm feature-card bg-white rounded-3 text-center">
                        <div class="fs-1 mb-3 text-primary">{{ $fitur['ikon'] }}</div>
                        <h4 class="card-title fw-bold text-secondary">{{ $fitur['judul'] }}</h4>
                        <p class="card-text text-muted mt-2">{{ $fitur['ket'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-4 mt-5 border-top border-secondary">
        <div class="container">
            <p class="mb-0 text-muted">&copy; 2026 {{ $namaAplikasi }}. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
