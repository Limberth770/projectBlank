<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = [
        'nombre',
        'sigla',
        'codigo'
    ];
    protected $hidden= ['created_at','updated_at'];
}
