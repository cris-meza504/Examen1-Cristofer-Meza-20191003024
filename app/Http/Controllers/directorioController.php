<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use Directory;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;

class directorioController extends Controller
{
    public function principal(){
        $directorios = Directorio::all();
        return view('directorio', compact('directorios'));
    }


    public function agregarDirectorio(){
        return view('agregarDirectorio');
    }

    public function buscarDirectorio(){
        return view('buscarDirectorio');
    }

    public function salvarDirectorio(Request $request){
        $nuevoDirectorio = new Directorio();
        $nuevoDirectorio->codigoEntrada = $request->codigo;
        $nuevoDirectorio->nombre = $request->nombre;
        $nuevoDirectorio->apellido = $request->apellido;
        $nuevoDirectorio->telefono = $request->telefono;
        $nuevoDirectorio->correo =$request->correo;
        $nuevoDirectorio->save();

        return redirect(route('principal.directorio'));
    }

    public function eliminarDirectorio($id){
        $directorioEliminar = Directorio::find($id);
        return view('eliminarDirectorio', compact('directorioEliminar'));
    }
}
