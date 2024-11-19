<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    public function carrerasf()
    {
        return $this->belongsTo(carrera::class,'carrera_id','id');
    }

    public function alumnosf()
    {
        return $this->belongsToMany(alumno::class,'cardex', 'materia_id',
         'alumno_id')->withPivot('id');
    }
}
