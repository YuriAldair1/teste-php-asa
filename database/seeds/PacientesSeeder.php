<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // Gerar 10 pacientes fictícios
        for ($i = 0; $i < 10; $i++) {
            DB::table('pacientes')->insert([
                'name' => $faker->name,
                'cpf' => $faker->numerify('###########'),
                'data_nasc' => $faker->date,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}
