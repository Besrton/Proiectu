<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
class GestorController extends Controller
{
    public function index(){
        return view('crearIncidencia');
    }
    public function crudIncidencia(){
        // si esta en una carpeta es (/carpeta/fitxer)
        $incidencia = Incidencia::paginate();
        //return $incidencia;
        return view('crudIncidencia', compact('incidencia'));
    }
}
