<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(PacientesSeeder::class);
        $this->call(EspecialidadesSeeder::class);
        $this->call(MedicosSeeder::class);
    }
}
