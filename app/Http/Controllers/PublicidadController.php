<?php

namespace SafePet\Http\Controllers;

use Illuminate\Http\Request;
use SafePet\Http\Requests;
use SafePet\Publicidad;
use SafePet\usuario;
use Illuminate\Support\Facades\Redirect;
use SafePet\Http\Requests\PublicidadFormRequest;
use DB;

class PublicidadController extends Controller
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
   			$publicidad=DB::table('publicidad')->where('fecha_inicio','>=','%'.$query.'%')
   			->orderby('idPublicidad', 'desc')
            ->join('usuario', 'usuario.id', '=', 'publicidad.Usuario_Id_Usuario')
   			->paginate(10);

   			return view('admin.publicidad.index',["publicidad"=>$publicidad,"searchText"=>$query]);
   		}



   }


   public function create()
   {

            $usuarios = DB::select('SELECT * FROM usuario where Rol_IdRol= 2');
   			return view ('admin.publicidad.create',compact('usuarios','id'));
   }

   public function store(PublicidadFormRequest $request)
   {
   		$publicidad=new Publicidad;
   		$publicidad->fecha_inicio=$request->get('fecha_inicio');
   		$publicidad->fecha_termino=$request->get('fecha_termino');
   		$publicidad->imagen_publi=$request->get('imagen_publi');
   		$publicidad->link_redirect=$request->get('link_redirect');
   		$publicidad->mensaje_publi=$request->get('mensaje_publi');
   		$publicidad->est_publicidad=1;
   		$publicidad->Usuario_Id_Usuario=$request->get('Usuario_Id_Usuario');

        
         try {
                  $publicidad->save();  
               } catch(\Illuminate\Database\QueryException $e){
               $errorCode = $e->errorInfo[1];
                  
                     return redirect()->back()->with('warning', 'Ha ocurrido un error al intentar guardar datos');
                  
               }
         return redirect()->back()->with('success', 'Datos Guardados!');

   }
   

   public function show($id)
   {
   		return view("admin.publicidad.show",["publicidad"=>Publicidad::findOrFail($id)]);
   }

   public function edit($id)
   {
   		return view("admin.publicidad.edit",["publicidad"=>Publicidad::findOrFail($id)]);
   }

   public function update(PublicidadFormRequest $request, $id)
   {

   		$publicidad=Publicidad::findOrFail($id);
   		$publicidad->fecha_inicio=$request->get('fecha_inicio');
   		$publicidad->fecha_termino=$request->get('fecha_termino');
   		$publicidad->link_redirect=$request->get('link_redirect');
   		$publicidad->mensaje_publi=$request->get('mensaje_publi');
         $publicidad->imagen_publi=$request->get('imagen_publi');
   		$publicidad->est_publicidad=1;
   		$publicidad->Usuario_Id_Usuario=$request->get('Usuario_Id_Usuario');

   		$publicidad->update();
   		return Redirect::to("admin/publicidad");

   }

   public function destroy($id)
   {
   		$publicidad=Publicidad::findOrFail($id);
   		$publicidad->est_publicidad='0';

   		$publicidad->update();
   		return Redirect::to("admin/publicidad");
   }



}
