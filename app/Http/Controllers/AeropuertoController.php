<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Avion;
use App\Models\Pasajero;

class AeropuertoController extends Controller
{
    public function index()
    {
        // Obtener todos los aviones y pasajeros
        $aviones = Avion::all();
        $pasajeros = Pasajero::all();

        // Pasar los datos a la vista 'home'
        return view('aeropuerto', compact('aviones', 'pasajeros'));
    }
}
