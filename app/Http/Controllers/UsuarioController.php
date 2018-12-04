<?php

namespace SafePet\Http\Controllers;

use Illuminate\Http\Request;
use SafePet\Http\Requests;
use SafePet\usuario;
use Illuminate\Support\Facades\Redirect;
use SafePet\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
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
   			$usuario=DB::table('usuario')->where('CorreoUsuario','like','%'.$query.'%')
   			->where('Rol_IdRol','=','2')
   			->orderby('NombreUsuario', 'desc')
   			->paginate(10);

   			return view('admin.usuario.index',["usuario"=>$usuario,"searchText"=>$query]);
   		}
   }



   public function create()
   {
   			return view ("admin.usuario.create");
   }

   public function store(UsuarioFormRequest $request)
   {

   	   $usuario=new usuario;     
         $usuario->id= $request->get('id');
   		$usuario->NombreUsuario=$request->get('NombreUsuario');
   		$usuario->FechaNacimiento_Usuario=$request->get('FechaNacimiento_Usuario');
   		$usuario->Rol_IdRol=2;
   		$usuario->CorreoUsuario=$request->get('CorreoUsuario');
         $usuario->PasswordUsuario=$request->get('PasswordUsuario');
               try {
                  $usuario->save();
               } catch(\Illuminate\Database\QueryException $e){
               $errorCode = $e->errorInfo[1];
                  if($errorCode == '1062'){
                     return redirect()->back()->with('warning', 'Error al guardar datos, entrada duplicada');
                  dd('Duplicate Entry');  
                  }
               }
   		return redirect()->back()->with('success', 'Datos Guardados!');

   		
   }
   

   public function show($id)
   {
   		return view("admin.usuario.show",["usuario"=>usuario::findOrFail($id)]);
   }

   public function edit($id)
   {
   		return view("admin.usuario.edit",["usuario"=>usuario::findOrFail($id)]);
   }

   public function update(PublicidadFormRequest $request, $id)
   {

   }

   public function destroy($id)
   {
   		
   }



}
