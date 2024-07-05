<?php

use App\Http\Controllers\directorioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio/principal', 
            [directorioController::class, 'principal'])->name('principal.directorio');

Route::get('/directorio/principal/agregar', 
            [directorioController::class, 'agregarDirectorio'])->name('directorio.agregar');

Route::get('/directorio/principal/buscar', 
            [directorioController::class, 'buscarDirectorio'])->name('directorio.buscar');

Route::post('/directorio/principal/buscar/salvar', 
            [directorioController::class, 'salvarDirectorio'])->name('directorio.salvar');

Route::get('/directorio/principal/eliminar/{id}', 
            [directorioController::class, 'eliminarDirectorio'])->name('directorio.eliminar');