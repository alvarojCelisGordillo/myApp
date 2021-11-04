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
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetFacturaController;

Route::get('/', function () {
    return view('welcome');
});

// ::::::::::::::::::: Routes Categoria ::::::::::::::::::::::::
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::get('/api/categoria', [CategoriaController::class, 'index']);
Route::put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::delete('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);

// :::::::::::::::::::: Routes Marca ::::::::::::::::::::::::::::
Route::post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::get('/api/marca', [MarcaController::class, 'index']);
Route::put('/api/marca/actualizar', [MarcaController::class, 'update']);
Route::delete('/api/marca/eliminar', [MarcaController::class, 'destroy']);


// ::::::::::::::::::::: Routes Clientes :::::::::::::::::::::::::::::::
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::get('/api/cliente', [ClienteController::class, 'index']);
Route::put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::delete('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

// :::::::::::::::::::::: Routes Productos :::::::::::::::::::::::::::::::::::::::::::::::::
Route::post('/api/producto/registrar', [ProductoController::class, 'store']);
Route::get('/api/producto', [ProductoController::class, 'index']);
Route::put('/api/producto/actualizar', [ProductoController::class, 'update']);
Route::delete('/api/producto/eliminar', [ProductoController::class, 'destroy']);

// ::::::::::::::::::::::::: Routes Facturas ::::::::::::::::::::::::::::::::::::::::
Route::post('/api/factura/registrar', [FacturaController::class, 'store']);
Route::get('/api/factura', [FacturaController::class, 'index']);
Route::put('/api/factura/actualizar', [FacturaController::class, 'update']);
Route::delete('/api/factura/eliminar', [FacturaController::class, 'destroy']);


// :::::::::::::::::::::::::: Routes DetalleFacturas :::::::::::::::::::::::::::::
Route::post('/api/detallefactura/registrar', [DetFacturaController::class, 'store']);
Route::get('/api/detallefactura', [DetFacturaController::class, 'index']);
Route::put('/api/detallefactura/actualizar', [DetFacturaController::class, 'update']);
Route::delete('/api/detallefactura/eliminar', [DetFacturaController::class, 'destroy']);

