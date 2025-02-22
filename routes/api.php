<?php

use App\Http\Controllers\Api\autorController;
use App\Http\Controllers\Api\publicacionController;
use App\Models\Autor;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Listar autores
Route::get('/autores/listar', [autorController::class, 'listar']);

//Listar una autores
Route::get('/autores/listar_id/{id}', [autorController::class, 'listar_id']);

//Crear autores
Route::post('/autores/crear', [autorController::class, 'crear']);

//Actualizar autores
Route::put('/autores/actualizar/{id}', [autorController::class, 'actualizar']);

//Eliminar autores
Route::delete('/autores/eliminar/{id}', [autorController::class, 'eliminar']);




//Listar publicaciones
Route::get('/publicaciones/listar', [publicacionController::class, 'listar']);

//Listar una publicaciones
Route::get('/publicaciones/listar_id/{id}', [publicacionController::class, 'listar_id']);

//Crear publicaciones
Route::post('/publicaciones/crear', [publicacionController::class, 'crear']);


//Actualizar publicaciones
Route::put('/publicaciones/actualizar/{id}', [publicacionController::class, 'actualizar']);

// Eliminar publicación
Route::delete('/publicaciones/eliminar/{id}', [PublicacionController::class, 'eliminar']);