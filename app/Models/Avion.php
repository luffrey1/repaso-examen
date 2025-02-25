<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $fillable = ['marca', 'modelo', 'maximoPasajeros'];

    public function pasajeros() {
        return $this->hasMany(Pasajero::class);
    }
}
