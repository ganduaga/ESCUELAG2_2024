<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //
    public function carrerasf(){
        return $this->belongsTo(Carrera::class, "carrera","id" );
    }

    public function materiasf(){
        return $this->belongsToMany( Materia::class, "Cardexes", "alumno_id", 
            "materia_id")->
            withPivot("id", "calificacion");
    }
}
