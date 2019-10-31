<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
      use SoftDeletes; //deleted_at campo indicador de tabla 'borrada' o no

    protected $table = 'clientes';

   // protected $primaryKey = 'id';//sólo si no va a ser id

    //protected $incrementing = false; //sólo si no es auto numérica la clave principal
    //protected $keyType = 'string'; //sólo si el tipo de la clave principal no es entero
    //protected $timestamps = false; //sólo si la tabla no va a tener los campos created_at y updated_at
    //const CREATED_AT = 'fecha_creacion'; //sólo si se cambia el nombre del campo created_at
    //const UPDATED_AT = 'fecha_edicion'; //sólo si se cambia el nombre del campo updated_at
    protected $hidden = ['created_at','updated_at']; //sólo si hay campos que no se deben mostrar
    protected $fillable = ['nombre','apellidos','correo','tlf','clave','dirrecion','ip','estado','nacimiento','sueldo_anual' ]; //para definir los campos
}
