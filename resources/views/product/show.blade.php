<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle | CelularShop</title>
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

=======
@extends('layout.app')


@section('content')
>>>>>>> main
    <main class="container">
        <div class="product-show">
            <div class="product-gallery">
                <img src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?auto=format&fit=crop&w=800&q=80" alt="iPhone 13 Pro">
            </div>
            
            <div class="product-details">
                <span class="tag">Apple</span>
                <span class="tag" style="background: #e0f2fe; color: #0369a1;">ID: {{ $idproduct }}</span>
                
                <h1>iPhone 13 Pro</h1>
                <div class="price">$999.00</div>
                
                <p style="margin-bottom: 2rem; color: #475569;">
                    El iPhone 13 Pro cuenta con un sistema de cámaras Pro de 12 MP: teleobjetivo, gran angular y ultra gran angular. Pantalla Super Retina XDR con ProMotion.
                </p>

                <div style="margin-bottom: 2rem;">
                    <strong>Especificaciones:</strong>
                    <ul style="margin-left: 1.5rem; margin-top: 0.5rem; color: #475569;">
                        <li>Pantalla: 6.1" OLED</li>
                        <li>Almacenamiento: 256GB</li>
                        <li>RAM: 6GB</li>
                    </ul>
                </div>
                
                <button class="btn" style="width: 100%; font-size: 1.1rem; padding: 1rem;">Añadir al Carrito</button>
            </div>
        </div>
<<<<<<< HEAD
    </main>
</body>
</html>
=======
    @endsection
>>>>>>> main
