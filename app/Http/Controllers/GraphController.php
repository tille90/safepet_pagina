<?php

namespace SafePet\Http\Controllers;

use Illuminate\Http\Request;
use SafePet\Http\Requests;
use SafePet\usuario;
use Illuminate\Support\Facades\Redirect;
use DB;

class GraphController extends Controller
{
     public function index()
    {
        $pub = DB::select('SELECT mascota.NombreMascota as mascota,razamascota.RazaMascota as raza from razamascota inner join mascota ON mascota.RazaMascota = razamascota.idRazaMascota');



        return view('admin.estadisticas.dashboard',["publicidad"=>$pub]);

    }
}

