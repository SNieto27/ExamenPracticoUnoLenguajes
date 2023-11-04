<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Directorio;

use App\Models\Contacto;

class DirectorioController extends Controller
{
    //

    public function index(){
        $directorios = Directorio::all();
        return  view('directorio', compact('directorios'));
    }

    public function create(){
        return view('crearEntrada');
    }

    public function buscar(){
        return view('buscar');
    }

    public function verContactos($codigo){
        $directorios = Directorio::where('codigoEntrada', $codigo);
        $contactos = Contacto::where('codigoEntrada', $codigo);
        return view('vercontactos', compact('directorios'), compact('contactos'));
    }

    public function eliminar(){
        return view('eliminar');
    }

    public function store(Request $request){
        $directorio = new Directorio();
        $directorio->codigoEntrada = $request->input("codigo");
        $directorio->nombre = $request->input("nombre");
        $directorio->apellido = $request->input("apellido");
        $directorio->correo = $request->input("correo");
        $directorio->telefono = $request->input("telefono");
        $directorio->save();

        return redirect()->route('directorio.inicio');
    }

}
