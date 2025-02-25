<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvionController;
use App\Http\Controllers\PasajeroController;

Route::get('/', [AvionController::class, 'index'])->name('aeropuerto.index');
Route::get('pasajeros/index', [PasajeroController::class, 'index'])->name('pasajero.index');

Route::get('/pasajero/create', [PasajeroController::class, 'create'])->name('pasajero.create');
Route::post('/pasajero', [PasajeroController::class, 'store'])->name('pasajero.store');
Route::get('/pasajero', [PasajeroController::class, 'nombre']);
Route::get('/pasajero-edades', [PasajeroController::class, 'edades'])->name('pasajero.edad');
Route::delete('/pasajero-asistencia', [PasajeroController::class, 'destroyAsistencia'])->name('pasajero.destroyAsistencia');
Route::put('/pasajero-edad/{incremento}', [PasajeroController::class, 'aumentarEdad']);


//Aviones

// Ruta para crear un    avión (GET muestra el formulario)
Route::delete('/avion/{id}', [AvionController::class, 'destroy'])->name('avion.destroy');
Route::get('/avion/create', [AvionController::class, 'create']);


// Ruta para guardar el nuevo avión (POST)
Route::post('/avion', [AvionController::class, 'store'])->name('avion.store');

// Ruta para mostrar un avión por su id (GET)
Route::get('/avion/{id}', [AvionController::class, 'show']);

// Ruta para editar un avión (GET para mostrar el formulario de edición)
Route::get('/avion/{id}/edit', [AvionController::class, 'edit'])->name('avion.edit');

// Ruta para actualizar el avión (PUT)
Route::put('/avion/{id}', [AvionController::class, 'update'])->name('avion.update');








