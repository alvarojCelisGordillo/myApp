<?php

namespace App\Http\Controllers;
use App\Models\Factura;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //
    public function index() {
        $factura = Factura::get();

        return [
            'Facturas' => $factura
        ];
    }

    public function store(Request $request) {
        $factura = new Factura();
        $factura->fecha = $request->fecha;
        $factura->total=$request->total;
        $factura->iva = $request->iva;
        $factura->id_cliente = $request->idCliente;
        
        $factura->save();
    }

    public function update(Request $request) {
        $factura = Factura::findOrFail($request->id);
        $factura->fecha = $request->fecha;
        $factura->total = $request->total;
        $factura->iva = $request->iva;
        
        $factura->id_cliente = $request->idCliente;
        
        $factura->save();
    }

    public function destroy(Request $request) {
        $factura = Factura::findOrFail($request->id);

        $factura->delete();
    }
}
