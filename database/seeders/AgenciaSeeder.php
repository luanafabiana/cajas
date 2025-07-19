<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class AgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $agencias = [
            // Banco Nacional de Bolivia (id: 1)
            ['agencia' => 'la ramada', 'empresa_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => 'la villa', 'empresa_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => 'el plan 4000', 'empresa_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco Mercantil Santa Cruz (id: 2)
            ['agencia' => '101', 'empresa_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '102', 'empresa_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '103', 'empresa_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco BISA (id: 3)
            ['agencia' => '201', 'empresa_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '202', 'empresa_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '203', 'empresa_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco Ganadero (id: 4)
            ['agencia' => '301', 'empresa_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '302', 'empresa_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '303', 'empresa_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco Económico (id: 5)
            ['agencia' => '401', 'empresa_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '402', 'empresa_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '403', 'empresa_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco Fassil (id: 6)
            ['agencia' => '501', 'empresa_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '502', 'empresa_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '503', 'empresa_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco Unión (id: 7)
            ['agencia' => '601', 'empresa_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '602', 'empresa_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '603', 'empresa_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            
            // Banco Sol (id: 8)
            ['agencia' => '701', 'empresa_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '702', 'empresa_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['agencia' => '703', 'empresa_id' => 8, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('agencias')->insert($agencias);

    }
}
