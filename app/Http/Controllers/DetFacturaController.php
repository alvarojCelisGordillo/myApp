<?php

namespace App\Http\Controllers;
use App\Models\DetFactura;

use Illuminate\Http\Request;

class DetFacturaController extends Controller
{
    //

    public function index() {
        $detalleFactura = DetFactura::get();

        return [
            'Detalle Facturas' => $detalleFactura
        ];
    }

    public function store(Request $request) {
        $detalleFactura = new DetFactura();
        $detalleFactura->precio = $request->precio;
        $detalleFactura->cantidad = $request->cantidad;
        $detalleFactura->total = $request->total;
        
        $detalleFactura->id_factura = $request->idFactura;
        $detalleFactura->id_producto = $request->idProducto;

        $detalleFactura->save();
    }

    public function update(Request $request) {
        $detalleFactura = DetFactura::findOrFail($request->id);
        $detalleFactura->precio = $request->precio;
        $detalleFactura->cantidad = $request->cantidad;
        $detalleFactura->total = $request->total;
        
        $detalleFactura->id_factura = $request->idFactura;
        $detalleFactura->id_producto = $request->idProducto;

        $detalleFactura->save();
    }

    public function destroy(Request $request) {
        $detalleFactura = DetFactura::findOrFail($request->id);

        $detalleFactura->delete();
    }
}
