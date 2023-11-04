<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Directorio;

use App\Models\Contacto;

class ContactoController extends Controller
{
    //

    public function create(){
        return view('agregarcontacto');
    }

}
