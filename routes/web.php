<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WebController@index');
Route::get('/galeria-producto', 'WebController@galeriaProducto');
Route::get('/producto-compuesto', 'WebController@productoCompuesto');
Route::get('/producto-computo', 'WebController@productoComputo');
Route::get('/sobre-nosotros', 'WebController@sobreNosotros');
Route::get('/tienda-vendedor-productos', 'WebController@tiendavendedorProductos');
Route::get('/tienda-vendedor-tiendas', 'WebController@tiendavendedorTiendas');


