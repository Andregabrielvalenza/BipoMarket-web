<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function galeriaProducto()
    {
        return view('galeria-producto');
    }

    public function productoCompuesto()
    {
        return view('producto-compuesto');
    }

    public function productoComputo()
    {
        return view('producto-computo');
    }

    public function sobreNosotros()
    {
        return view('sobre-nosotros');
    }

    public function tiendavendedorProductos()
    {
        return view('tiendavendedor-producto');
    }

    public function tiendavendedorTiendas()
    {
        return view('tiendavendedor-tiendas');
    }
}
