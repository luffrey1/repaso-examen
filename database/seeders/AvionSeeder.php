<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Avion;

class AvionSeeder extends Seeder {
    public function run() {
        Avion::create([
            'marca' => 'Boeing',
            'modelo' => '747',
            'maximoPasajeros' => 660
        ]);

        Avion::create([
            'marca' => 'Airbus',
            'modelo' => 'A320',
            'maximoPasajeros' => 180
        ]);

        Avion::create([
            'marca' => 'Embraer',
            'modelo' => 'E195',
            'maximoPasajeros' => 132
        ]);

        Avion::create([
            'marca' => 'Bombardier',
            'modelo' => 'CRJ900',
            'maximoPasajeros' => 90
        ]);

        Avion::create([
            'marca' => 'Cessna',
            'modelo' => 'Citation X',
            'maximoPasajeros' => 12
        ]);
    }
}
