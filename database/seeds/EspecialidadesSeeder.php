<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->insert([
            ['name' => 'Cardiologia'],
            ['name' => 'Pediatria'],
            ['name' => 'Neurologia'],
            ['name' => 'Ortopedia'],
            ['name' => 'Dermatologia'],
            ['name' => 'Ginecologia'],
            ['name' => 'Oftalmologia'],
            ['name' => 'Psiquiatria'],
            ['name' => 'Endocrinologia'],
            ['name' => 'Gastroenterologia'],
            // Adicione mais especialidades conforme necessário
        ]);
    }
}
