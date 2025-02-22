<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Autor;


class autorController extends Controller
{
    public function listar()
    {
        $Autores = Autor::all();

        if($Autores->isEmpty())
        {
            $data = [
                'message' => 'No hay Autores registrados',
                'status' => 400];
            
            return response()->json($data, 400);
        }

        return response()->json($Autores, 200);
    }

    public function listar_id($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            $data = [
                'message' => 'Autor no encontrado',
                'status' => 404
            ];
            
            return response()->json($data, 404);
        }

        return response()->json($autor, 200);
    }

    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ]);

        Autor::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
        ]);

        return response()->json(['message' => 'Autor creado exitosamente.'], 201);
    }

    public function actualizar(Request $request, $id)
    {
        $autor = Autor::find($id);
    
        if (!$autor) {
            return response()->json([
                'message' => 'Autor no encontrado',
                'status' => 404
            ], 404);
        }
    
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ]);
    
        $autor->nombre = $request->nombre;
        $autor->apellido = $request->apellido;
    
        $autor->save();
    
        return response()->json([
            'message' => 'Autor actualizado exitosamente',
            'autor' => $autor
        ], 200);
    }
    
    public function eliminar($id)
    {
        $Autor = Autor::find($id);

        $Autor->delete();

        return response()->json('Eliminado', 200);
    }

}

