<?php

namespace SafePet;

use Illuminate\Database\Eloquent\Model;

class correo extends Model
{
     protected $table='contactenos';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable =[
    	'nombre',
    	'correo',
    	'telefono',
    	'mensaje',
    ];

    protected $guarded =[

    ];
}
