<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('medicos')->insert([
            [
                'name' => 'Dr. João Silva',
                'especialidade_id' => '1',
                'crm' => '123456-SP',
            ],
            [
                'name' => 'Dr. Maria Oliveira',
                'especialidade_id' => '2',
                'crm' => '654321-SP',
            ],
            [
                'name' => 'Dr. Carlos Souza',
                'especialidade_id' => '2',
                'crm' => '112233-SP',
            ],
            // Adicione mais médicos aqui, conforme necessário
        ]);
    }
}


