<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentos = [
            [
                'tipodocumento' => 'Depósito Bancario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Retiro Bancario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Transferencia Interna',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Transferencia Externa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Pago de Servicios',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Cheque',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Letra de Cambio',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Pagaré',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Factura',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Recibo Oficial',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Comprobante de Crédito',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Comprobante de Débito',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Nota de Crédito',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Nota de Débito',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipodocumento' => 'Orden de Pago',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('tipodocumentos')->insert($documentos);
    }
}
