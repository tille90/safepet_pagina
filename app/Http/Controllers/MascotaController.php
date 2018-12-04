<?php

namespace SafePet\Http\Controllers;

use Illuminate\Http\Request;

use SafePet\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class MascotaController extends Controller
{

    public function __construct()
   {
      $this->middleware('auth');
   }


   
    public function index(Request $request)
   {
   		if($request)
   		{
   			$query=trim($request->get('searchText'));
   			$mascota=DB::table('mascota')->where('idRazaMascota','like','%'.$query.'%')
   			->orderby('idRazaMascota', 'desc')
            ->join('usuario', 'usuario.id', '=', 'mascota.IdDueno')
            ->join('condicionadopcion', 'condicionadopcion.IdCondicion', '=', 'mascota.EnAdopcion')
            ->join('razamascota', 'razamascota.idRazaMascota', '=', 'mascota.RazaMascota')
   			->paginate(5);

   			return view('admin.mascotas.index',["mascota"=>$mascota,"searchText"=>$query]);
   		}


   }
}

