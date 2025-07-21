<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;


class DepartamentoSeeder extends Seeder
{
    public function run(): void
    {
        $departamentos = [
            // Banco Nacional de Bolivia (id: 1)
            [
                'departamento' => 'Gerencia General',
                'empresa_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Operaciones',
                'empresa_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Atención al Cliente',
                'empresa_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco Mercantil Santa Cruz (id: 2)
            [
                'departamento' => 'Dirección Ejecutiva',
                'empresa_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Créditos',
                'empresa_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Tecnología',
                'empresa_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco BISA (id: 3)
            [
                'departamento' => 'Administración',
                'empresa_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Finanzas',
                'empresa_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Marketing',
                'empresa_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco Ganadero (id: 4)
            [
                'departamento' => 'Recursos Humanos',
                'empresa_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Auditoría',
                'empresa_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Legal',
                'empresa_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco Económico (id: 5)
            [
                'departamento' => 'Banca Corporativa',
                'empresa_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Banca Personas',
                'empresa_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Riesgos',
                'empresa_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco Fassil (id: 6)
            [
                'departamento' => 'Innovación',
                'empresa_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Servicios Digitales',
                'empresa_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Operaciones Digitales',
                'empresa_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco Unión (id: 7)
            [
                'departamento' => 'Banca PYME',
                'empresa_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Compliance',
                'empresa_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Servicios Transaccionales',
                'empresa_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Banco Sol (id: 8)
            [
                'departamento' => 'Microfinanzas',
                'empresa_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Desarrollo Comunitario',
                'empresa_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'departamento' => 'Inclusión Financiera',
                'empresa_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('departamentos')->insert($departamentos);
    }
}
