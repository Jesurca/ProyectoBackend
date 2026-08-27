<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | CelularShop</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="/Home" class="logo">📱 CelularShop</a>
            <div class="nav-links">
                <a href="/product">Catálogo</a>
                <a href="/product/create">Publicar Equipo</a>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>