<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto | CelularShop</title>
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
        <div class="form-container">
            <h2 style="margin-bottom: 1.5rem;">Registrar Nuevo Celular</h2>
            
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="id">ID del Producto</label>
                    <input type="text" id="id" name="id" placeholder="Ej: CEL-001" required>
                </div>

                <div class="form-group">
                    <label for="name">Nombre del Equipo</label>
                    <input type="text" id="name" name="name" placeholder="Ej: Xiaomi Redmi Note 12" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio ($)</label>
                    <input type="number" id="precio" name="precio" step="0.01" placeholder="Ej: 299.99" required>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría / Marca</label>
                    <select id="categoria" name="categoria" required>
                        <option value="">Seleccione una marca...</option>
                        <option value="apple">Apple</option>
                        <option value="samsung">Samsung</option>
                        <option value="xiaomi">Xiaomi</option>
                        <option value="motorola">Motorola</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="urlimagen">URL de la Imagen</label>
                    <input type="url" id="urlimagen" name="urlimagen" placeholder="https://ejemplo.com/imagen.jpg" required>
                </div>

                <div class="form-group">
                    <label for="descrip">Descripción del Producto</label>
                    <textarea id="descrip" name="descrip" placeholder="Características del celular..." required></textarea>
                </div>

                <button type="submit" class="btn" style="width: 100%;">Guardar Producto</button>
            </form>
        </div>
<<<<<<< HEAD
    </main>
</body>
</html>
=======
@endsection
>>>>>>> main
