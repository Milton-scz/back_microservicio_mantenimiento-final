<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activo;
use Faker\Factory as Faker;

class ActivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $nombre = ucfirst($faker->unique()->word); // Genera una palabra única cada vez

            Activo::create([
                'nombre' => $nombre,
                'descripcion' => $faker->sentence,
                'fecha_inicio' => $faker->date(),
                'responsable' => $faker->name,
                'costo' => $faker->randomFloat(2, 100, 10000),
                'estado' => $faker->randomElement(['Proceso', 'Finalizado', 'En espera']),
            ]);
        }
    }
}
