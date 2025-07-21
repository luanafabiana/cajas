<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            
       $empresas = [
            [
                'nombre' => 'Banco Nacional de Bolivia',
                'direccion' => 'Av. Camacho #1438, La Paz',
                'telefono' => '800105555',
                'email' => 'contacto@bnb.com.bo',
                'nit' => '1021835026',
                'logo' => 'bnb.png',
                'color' => '#0033A0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco Mercantil Santa Cruz',
                'direccion' => 'Av. San Martín #155, Santa Cruz',
                'telefono' => '800333303',
                'email' => 'informaciones@mercantil.com.bo',
                'nit' => '1017261023',
                'logo' => 'mercantil.png',
                'color' => '#ED1C24',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco BISA',
                'direccion' => 'Av. 16 de Julio #1620, La Paz',
                'telefono' => '800110222',
                'email' => 'atencion@bisa.com.bo',
                'nit' => '1018447025',
                'logo' => 'bisa.png',
                'color' => '#005DAA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco Ganadero',
                'direccion' => 'Av. 16 de Julio #1619, La Paz',
                'telefono' => '800105050',
                'email' => 'contacto@bancoganadero.com.bo',
                'nit' => '1018447026',
                'logo' => 'ganadero.png',
                'color' => '#00A859',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco Económico',
                'direccion' => 'Av. 6 de Agosto #2625, La Paz',
                'telefono' => '800333000',
                'email' => 'contacto@be.bo',
                'nit' => '1021836027',
                'logo' => 'economico.png',
                'color' => '#FFD700',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco Fassil',
                'direccion' => 'Av. San Martín #400, Santa Cruz',
                'telefono' => '800120900',
                'email' => 'info@bancofassil.com.bo',
                'nit' => '1021837028',
                'logo' => 'fassil.png',
                'color' => '#FF6600',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco Unión',
                'direccion' => 'Av. Mariscal Santa Cruz #1299, La Paz',
                'telefono' => '800110011',
                'email' => 'contacto@bancounion.com.bo',
                'nit' => '1018448029',
                'logo' => 'union.png',
                'color' => '#FF0000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Banco Sol',
                'direccion' => 'Av. 16 de Julio #1616, La Paz',
                'telefono' => '800110900',
                'email' => 'contacto@bancosol.com.bo',
                'nit' => '1018449030',
                'logo' => 'sol.png',
                'color' => '#FFCC00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('empresas')->insert($empresas);
    }
}
