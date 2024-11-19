<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
    public function materiasf()
    {
        return $this->HasMany(Materia::class);
    }

    public function alumnosf()
    {
        return $this->HasMany(alumno::class);
    }
}
