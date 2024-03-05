<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    public function getCategoria() {
        return response()->json(categoria::all(), 200);
    }

    public function getCategoriaById($id) {
        $categoria = categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        return response()->json($categoria::find($id), 200);
    }


    public function addCategoria(Request $request) {
        $categoria = categoria::create($request->all());
        return response($categoria,  200);
    }

    public function updateCategoria(Request $request, $id) {
        $categoria = categoria::find($id);
        if (is_null($categoria)) {
          return response()->json(['Mensaje' => 'No se encontro la Categoría'], 404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    public function deleteCategoria($id) {
        $categoria = categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'No se encontro la Categoría'], 404);
        }
        $categoria->delete();
        return response()->json(['Mensaje' => 'Se elimino correctamente la Categoría'], 200);
    }
}
