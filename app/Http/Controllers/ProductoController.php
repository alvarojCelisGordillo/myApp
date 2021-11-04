<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function index() {
        $producto = Producto::get();

        return [
            'Productos'=> $producto
        ];
    }

    public function store(Request $request) {
        $producto = new Producto();
        $producto->codigo_producto = $request->codigoProducto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->fecha_vencimiento = $request->fechaVencimiento;
        $producto->estado = $request->estado;

        $producto->id_marca = $request->idMarca;
        $producto->id_categoria = $request->idCategoria;
        
        $producto->save();
    }

    public function update(Request $request) {
        $producto = Producto::findOrFail($request->id);
        $producto->codigo_producto = $request->codigoProducto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->fecha_vencimiento = $request->fechaVencimiento;
        $producto->estado = $request->estado;

        $producto->id_marca = $request->idMarca;
        $producto->id_categoria = $request->idCategoria;

        $producto->save();
    }

    public function destroy(Request $request) {
        $producto = Producto::findOrFail($request->id);

        $producto->delete();
    }

}
