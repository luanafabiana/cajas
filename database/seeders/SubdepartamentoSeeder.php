<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SubdepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los departamentos con sus IDs y empresas
        $departamentos = DB::table('departamentos')->get();
        
        $subdepartamentos = [];

        foreach ($departamentos as $departamento) {
            // Asignar subdepartamentos según el departamento
            $subs = $this->getSubdepartamentosForDepartamento($departamento->departamento, $departamento->empresa_id);
            
            foreach ($subs as $sub) {
                $subdepartamentos[] = [
                    'subdepartamento' => $sub,
                    'departamento_id' => $departamento->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        DB::table('subdepartamentos')->insert($subdepartamentos);
    }

    /**
     * Devuelve los subdepartamentos según el departamento y banco
     */
    private function getSubdepartamentosForDepartamento($departamento, $empresaId): array
    {
        // Estructura de subdepartamentos por departamento
        $estructura = [
            // Banco Nacional de Bolivia (id: 1)
            1 => [
                'Gerencia General' => ['Subgerencia General', 'Secretaría General', 'Asesoría Legal'],
                'Operaciones' => ['Caja Central', 'Operaciones Internacionales', 'Compensación'],
                'Atención al Cliente' => ['Servicio al Cliente', 'Reclamos', 'Asistencia Personalizada']
            ],
            // Banco Mercantil Santa Cruz (id: 2)
            2 => [
                'Dirección Ejecutiva' => ['Subdirección Ejecutiva', 'Planificación Estratégica', 'Control de Gestión'],
                'Créditos' => ['Análisis Crediticio', 'Cartera de Clientes', 'Recuperaciones'],
                'Tecnología' => ['Sistemas', 'Infraestructura TI', 'Desarrollo']
            ],
            // Banco BISA (id: 3)
            3 => [
                'Administración' => ['Logística', 'Mantenimiento', 'Servicios Generales'],
                'Finanzas' => ['Contabilidad', 'Tesorería', 'Presupuestos'],
                'Marketing' => ['Publicidad', 'Relaciones Públicas', 'Estudios de Mercado']
            ],
            // Banco Ganadero (id: 4)
            4 => [
                'Recursos Humanos' => ['Selección', 'Capacitación', 'Nóminas'],
                'Auditoría' => ['Auditoría Interna', 'Control de Riesgos', 'Cumplimiento'],
                'Legal' => ['Contratos', 'Jurídico Corporativo', 'Litigios']
            ],
            // Banco Económico (id: 5)
            5 => [
                'Banca Corporativa' => ['Grandes Empresas', 'Empresas Medianas', 'Sector Público'],
                'Banca Personas' => ['Cuentas Individuales', 'Tarjetas', 'Préstamos Personales'],
                'Riesgos' => ['Análisis de Riesgo', 'Modelos Predictivos', 'Prevención de Fraude']
            ],
            // Banco Fassil (id: 6)
            6 => [
                'Innovación' => ['Nuevos Productos', 'Transformación Digital', 'Proyectos Especiales'],
                'Servicios Digitales' => ['Banca Móvil', 'Banca Internet', 'Canales Digitales'],
                'Operaciones Digitales' => ['Procesamiento Digital', 'Autenticación', 'Seguridad Digital']
            ],
            // Banco Unión (id: 7)
            7 => [
                'Banca PYME' => ['Microcréditos', 'Asesoría PYME', 'Fondos Concursables'],
                'Compliance' => ['Prevención Lavado', 'Regulación Financiera', 'Ética Corporativa'],
                'Servicios Transaccionales' => ['Transferencias', 'Pagos', 'Cobranzas']
            ],
            // Banco Sol (id: 8)
            8 => [
                'Microfinanzas' => ['Crédito Grupal', 'Crédito Individual', 'Ahorros'],
                'Desarrollo Comunitario' => ['Programas Sociales', 'Capacitación Financiera', 'Responsabilidad Social'],
                'Inclusión Financiera' => ['Banca Comunitaria', 'Agentes Corresponsales', 'Puntos de Atención']
            ]
        ];

        return $estructura[$empresaId][$departamento] ?? ['Sección Principal'];
    }
}
