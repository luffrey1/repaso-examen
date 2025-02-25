<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasajero;

class PasajeroSeeder extends Seeder {
    public function run() {
        Pasajero::create([
            'id' => '1',
            'nombre' => 'Juan',
            'apellidos' => 'Pérez',
            'edad' => 35,
            'asistencia' => true,
            'contrasena' => bcrypt('contraseña123'),
            'avion_id' => 1 // Relacionado con el avión con ID 1
        ]);

        Pasajero::create([
            'id' => '2',
            'nombre' => 'María',
            'apellidos' => 'Gómez',
            'edad' => 28,
            'asistencia' => false,
            'contrasena' => bcrypt('secreto456'),
            'avion_id' => 2
        ]);

        Pasajero::create([
            'id' => '3',
            'nombre' => 'Carlos',
            'apellidos' => 'López',
            'edad' => 42,
            'asistencia' => true,
            'contrasena' => bcrypt('clave789'),
            'avion_id' => 3
        ]);

        Pasajero::create([
            'id' => '4',
            'nombre' => 'Ana',
            'apellidos' => 'Martínez',
            'edad' => 31,
            'asistencia' => false,
            'contrasena' => bcrypt('admin123'),
            'avion_id' => 4
        ]);

        Pasajero::create([
            'id' => '5',
            'nombre' => 'David',
            'apellidos' => 'Fernández',
            'edad' => 27,
            'asistencia' => true,
            'contrasena' => bcrypt('password'),
            'avion_id' => 5
        ]);
    }
}

