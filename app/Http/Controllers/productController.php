<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index() // Listado de productos
    {
        return view('product.index');
    }

    public function create() // Formulario de producto
    {
        return view('product.create');
    }

    public function show($idproduct) // Mostrar producto vista estática
    {
        return view('product.show', compact('idproduct'));
    }
}