<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //

    public function index() {
        $marca = Marca::get();

        return [
            'Marcas'=> $marca
        ];
    }

    public function store(Request $request) {
        $marca = new Marca();
        $marca->nombre = $request->nombre;
        $marca->estado = $request->estado;

        $marca->save();
    }

    public function update(Request $request) {
        $marca = Marca::findOrFail($request->id);
        $marca->nombre = $request->nombre;
        $marca->estado = $request->estado;

        $marca->save();
    }

    public function destroy(Request $request) {
        $marca = Marca::findOrFail($request->id);
        $marca->delete();
    }
}
