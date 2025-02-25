<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasajeroController;

Route::put('/pasajero-edad/{incremento}', [PasajeroController::class, 'aumentarEdad']);
Route::post('/pasajero-api', [PasajeroController::class, 'guardarPasajero']);



