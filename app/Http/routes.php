<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome.blade.php');
});




Route::get('/contacto', function () {
    return view('inicio.contacto');
});


Route::auth();

Route::get('/home', 'HomeController@index');


/* Rutas para las vistas de la consola de administración */
Route::resource('admin/publicidad','PublicidadController');

/* Rutas para las vistas de la consola de administración */
Route::resource('admin/usuario','UsuarioController');

/* Rutas para las vistas de la consola de administración */
Route::resource('admin/mascotas','MascotaController');




/* Rutas para las vistas de la consola de administración */
Route::resource('admin/denuncia','DenunciaController');

/* Rutas para las vistas de los gráficos */
Route::resource('admin/publicidad/graphs','PublicidadGraphController');


/* Formulario de contacto */
Route::resource('mail','MailController');


Route::get('admin/estadisticas/dashboard','GraphController@index');

/*Conversión de datos a PDF*/	
Route::get('pdf', 'PdfController@invoice');


