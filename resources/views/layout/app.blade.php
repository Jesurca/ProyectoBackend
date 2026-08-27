<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | CelularShop</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('layout.header')

    <div class="container">
        @yield('content')
    </div>
    //Mi pagina no tiene footer, pero si lo tuviera, lo pondria aqui
</body>
</html>