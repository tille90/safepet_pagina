<?php

namespace SafePet;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
     protected $table='usuario';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'id',
    	'NombreUsuario',
    	'FechaNacimiento_Usuario',
    	'Rol_IdRol',
    	'CorreoUsuario',
        'PasswordUsuario'
    ];

    protected $guarded =[

    ];
}
