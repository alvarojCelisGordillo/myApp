<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index() {
        $cliente = Cliente::get();

        return [
            'Clientes'=> $cliente
        ];
    }

    public function store(Request $request) {
        $cliente = new Cliente();
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->numero_documento = $request->numero_documento;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
        $cliente->estado = $request->estado;

        $cliente->save();
    }
}
