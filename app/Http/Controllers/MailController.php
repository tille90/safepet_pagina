<?php

namespace SafePet\Http\Controllers;

use Illuminate\Http\Request;

use SafePet\Http\Requests;
use SafePet\Http\Requests\MailFormRequest;


use SafePet\correo;
use Mail;
use Session;
use Redirect;
use fails;

class MailController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MailFormRequest $request)
    {
    	
        $correo = new correo;
        $correo->nombre=$request->get('nombre');
        $correo->correo=$request->get('correo');
        $correo->telefono=$request->get('telefono');
        $correo->mensaje=$request->get('mensaje');
       

        Mail::send('inicio.contact',$request->all(), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('josue.cea@gmail.com');
        });
        Session::flash('message','El Mensaje se ha enviado correctamente, gracias');

        $correo->save();
        return Redirect::to('/#contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
