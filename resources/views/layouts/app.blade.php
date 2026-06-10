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
</body>
</html>