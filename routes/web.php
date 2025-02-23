<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Autor;
use App\Models\Publicacion;


Route::get('/', function () {
    return view('welcome');
});