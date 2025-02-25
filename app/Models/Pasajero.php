<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    protected $fillable =['id', 'nombre', 'apellidos', 'edad', 'asistencia', 'contrasena','avion_id'];

    public function avion() {
        return $this->belongsTo(Avion::class);
    }
}
