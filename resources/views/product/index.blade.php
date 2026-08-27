@extends('layout.app')


@section('content')

        <div class="product-grid">
            <!-- Producto 1 -->
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?auto=format&fit=crop&w=600&q=80" alt="iPhone 13" class="product-image">
                <div class="product-info">
                    <h3>iPhone 13 Pro</h3>
                    <p class="product-price">$999.00</p>
                    <a href="/product/1" class="btn" style="width: 100%; text-align: center;">Ver detalles</a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?auto=format&fit=crop&w=600&q=80" alt="Samsung Galaxy" class="product-image">
                <div class="product-info">
                    <h3>Samsung Galaxy S21</h3>
                    <p class="product-price">$799.00</p>
                    <a href="/product/2" class="btn" style="width: 100%; text-align: center;">Ver detalles</a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="product-card">
                <img src="https://i.blogs.es/a96630/google-pixel-30/1366_2000.jpg" alt="Google Pixel" class="product-image">
                <div class="product-info">
                    <h3>Google Pixel 6</h3>
                    <p class="product-price">$599.00</p>
                    <a href="/product/3" class="btn" style="width: 100%; text-align: center;">Ver detalles</a>
                </div>
            </div>
        </div>
    
@endsection