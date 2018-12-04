<?php

namespace SafePet;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    protected $table='publicidad';

    protected $primaryKey='idPublicidad';

    public $timestamps=false;

    protected $dateFormat = 'YYYY-MM-DD';

    protected $fillable =[
    	'fecha_inicio|date(YYYY-MM-DD)',
    	'fecha_termino|date(YYYY-MM-DD)',
    	'imagen_publi',
    	'link_redirect',
    	'mensaje_publi',
    	'est_publicidad',
    	'Usuario_Id_Usuario'
    ];

    protected $guarded =[

    ];

}
