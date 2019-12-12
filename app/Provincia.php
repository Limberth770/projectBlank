<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{    
    public function departamento() {
        return $this->belongsTo(Departamento::class);
    }

    protected $table = 'provincias';
    protected $fillable = [
        'nombre',        
        'codigo',
        'id_departamento'
    ];
    protected $hidden= ['created_at','updated_at'];
}
