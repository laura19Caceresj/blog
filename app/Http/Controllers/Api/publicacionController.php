<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publicacion;

class publicacionController extends Controller
{
    public function listar()
    {
        $Publicaciones = Publicacion::all();

        if($Publicaciones->isEmpty())
        {
            $data = [
                'message' => 'No hay Publicaciones registrados',
                'status' => 400];
            
            return response()->json($data, 400);
        }

        return response()->json($Publicaciones, 200);
    }

    public function listar_id($id)
    {
        $Publicaciones = Publicacion::find($id);

        if (!$Publicaciones) {
            $data = [
                'message' => 'Publicaciones no encontrado',
                'status' => 404
            ];
            
            return response()->json($data, 404);
        }

        return response()->json($Publicaciones, 200);
    }

    public function crear(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'required|string|max:255',
            'autor_id' => 'required|integer|exists:autores,id',
        ]);
    
        $publicacion = Publicacion::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'imagen' => $request->imagen,
            'autor_id' => $request->autor_id,
        ]);
    
        return response()->json([
            'message' => 'Publicación creada exitosamente.',
            'publicacion' => $publicacion
        ], 201);
    }
    
    public function actualizar(Request $request, $id)
    {
        $Publicacion = Publicacion::find($id);
    
        if (!$Publicacion) {
            return response()->json([
                'message' => 'Autor no encontrado',
                'status' => 404
            ], 404);
        }
     
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'required|string|max:255',
            'autor_id' => 'required|integer|exists:autores,id',
        ]);
    
        $Publicacion->titulo = $request->titulo;
        $Publicacion->contenido = $request->contenido;
        $Publicacion->imagen = $request->imagen;
        $Publicacion->autor_id = $request->autor_id;

        $Publicacion->save();
    
        return response()->json([
            'message' => 'Publicacion actualizado exitosamente',
            'autor' => $Publicacion
        ], 200);
    }

    public function eliminar($id)
    {
        $publicacion = Publicacion::find($id);
    
        if (!$publicacion) {
            return response()->json([
                'message' => 'Publicación no encontrada',
                'status' => 404
            ], 404);
        }
    
        $publicacion->delete();
    
        return response()->json([
            'message' => 'Publicación eliminada exitosamente'
        ], 200);
    } 
    
}