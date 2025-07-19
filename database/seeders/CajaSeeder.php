<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cajas = [
            [
                'codigocaja' => 'CAJA-001',
                'detalle' => 'Caja Principal - Oficina Central',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-002',
                'detalle' => 'Caja Secundaria - Área de Ventas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-003',
                'detalle' => 'Caja de Recepción',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-004',
                'detalle' => 'Caja de Emergencia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-005',
                'detalle' => 'Caja de Pagos Rápidos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-006',
                'detalle' => 'Caja de Depósitos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-007',
                'detalle' => 'Caja de Retiros',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-008',
                'detalle' => 'Caja de Atención al Cliente',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-009',
                'detalle' => 'Caja de Créditos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'codigocaja' => 'CAJA-010',
                'detalle' => 'Caja de Operaciones Especiales',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('cajas')->insert($cajas);
    }
}
