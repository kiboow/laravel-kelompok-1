<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fdfaf0; }
        .navbar-gold {
            background: linear-gradient(90deg, #d4af37, #f1c40f);
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .nav-link { color: #333 !important; font-weight: bold; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-gold">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Pisjay</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/menu">Menu Produk</a>
            </div>
        </div>
    </nav>
    <main>@yield('content')</main>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pisjay.oi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .bg-banana { background-color: #FFD200; }
        .text-banana { color: #D4AF37; }
        .btn-banana { background-color: #FFD200; color: #333; font-weight: bold; }
        .btn-banana:hover { background-color: #E6B800; color: #000; }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="{{ url('/') }}">
                <i class="fas fa-cheese me-2"></i>Pisjay.oi
            </a>
            <button class="navbar-expand">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active text-warning' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('menu') ? 'active text-warning' : '' }}" href="{{ url('/menu') }}">Menu Kami</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('testimoni') ? 'active text-warning' : '' }}" href="{{ url('/testimoni') }}">Testimoni & Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2026 Pisjay.oi - Tugas.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>