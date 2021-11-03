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

