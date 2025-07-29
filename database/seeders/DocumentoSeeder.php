<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        // Obtener relaciones necesarias
        $empresas = DB::table('empresas')->pluck('id');
        $tiposDocumentos = DB::table('tipodocumentos')->pluck('id');
        $cajas = DB::table('cajas')->pluck('id');
        $agencias = DB::table('agencias')->select('id', 'empresa_id', 'agencia')->get();
        
        $documentos = [];
        $contador = 1;

        foreach ($empresas as $empresaId) {
            // Filtrar agencias por empresa
            $agenciasEmpresa = $agencias->where('empresa_id', $empresaId);
            
            // Crear 5-10 documentos por empresa
            $numDocumentos = rand(5, 10);
            
            for ($i = 0; $i < $numDocumentos; $i++) {
                $agencia = $agenciasEmpresa->random();
                $tipoDocId = $tiposDocumentos->random();
                $cajaId = $cajas->random();
                
                $documentos[] = [
                    'nombre' => $this->generarNombreDocumento($tipoDocId, $contador++, $empresaId),
                    'detallefileweb' => $this->generarRutaArchivo($empresaId, $agencia->id),
                    'detalle1' => $this->generarDetalleDocumento($tipoDocId, $agencia->agencia),
                    'empresa_id' => $empresaId,
                    'tipodocumento_id' => $tipoDocId,
                    'caja_id' => $cajaId,
                    'agencia_id' => $agencia->id,
                ];
            }
        }

        DB::table('documentos')->insert($documentos);
    }

    /**
     * Genera nombres de documentos según el tipo
     */
    private function generarNombreDocumento($tipoDocId, $consecutivo, $empresaId): string
    {
        $prefix = [
            1 => 'DEP',   // Depósito
            2 => 'RET',    // Retiro
            3 => 'TINT',   // Transferencia Interna
            4 => 'TEXT',   // Transferencia Externa
            5 => 'PGS',    // Pago de Servicios
            6 => 'CHQ',    // Cheque
            9 => 'FAC',    // Factura
            10 => 'REC',   // Recibo
            15 => 'OP'     // Orden de Pago
        ];

        $prefix = $prefix[$tipoDocId] ?? 'DOC';
        return $prefix . '-' . str_pad($empresaId, 2, '0', STR_PAD_LEFT) . '-' . str_pad($consecutivo, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Genera rutas de archivo simuladas
     */
    private function generarRutaArchivo($empresaId, $agenciaId): string
    {
        $empresas = [
            1 => 'bnb',
            2 => 'mercantil',
            3 => 'bisa',
            4 => 'ganadero',
            5 => 'economico',
            6 => 'fassil',
            7 => 'union',
            8 => 'sol'
        ];

        return 'documentos/' . $empresas[$empresaId] . '/agencia_' . $agenciaId . '/' . uniqid() . '.pdf';
    }

    /**
     * Genera detalles de documentos según el tipo
     */
    private function generarDetalleDocumento($tipoDocId, $agencia): string
    {
        $detalles = [
            1 => 'Depósito realizado en agencia ' . $agencia,
            2 => 'Retiro procesado en caja de agencia ' . $agencia,
            3 => 'Transferencia entre cuentas de la misma entidad',
            4 => 'Transferencia interbancaria',
            5 => 'Pago de servicio básico o comercial',
            6 => 'Cheque girado por cliente',
            9 => 'Factura por servicios bancarios',
            10 => 'Recibo oficial de operación',
            15 => 'Orden de pago autorizada'
        ];

        return $detalles[$tipoDocId] ?? 'Documento registrado en el sistema - Agencia: ' . $agencia;
    }
}