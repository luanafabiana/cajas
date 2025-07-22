<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Fabiluana' ;
        $user->email = 'fabiluana@gmail.com';
        $user->password = Hash::make('13131515');
        $user->save();
            
        $user = new User();
        $user->name = 'Fernando' ;
        $user->email = 'apu@gmail.com';
        $user->password = Hash::make('10072025');
        $user->save();

        $admin= Role::create(['name' => 'admin']);
        $cliente= Role::create(['name' => 'cliente']);

        Permission::create(['name' => 'Crear Empresa'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar Empresa'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar Empresa'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar Empresa'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar Empresa'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar Empresa'])->syncRoles([$admin,$cliente]);

        Permission::create(['name' => 'Crear Documento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar Documento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar Documento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar Documento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar Documento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar Documento'])->syncRoles([$admin]);

        Permission::create(['name' => 'Crear TipoDocumento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar TipoDocumento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar TipoDocumento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar TipoDocumento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar TipoDocumento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar TipoDocumento'])->syncRoles([$admin]);

        Permission::create(['name' => 'Crear Agencia'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar Agencia'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar Agencia'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar Agencia'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar Agencia'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar Agencia'])->syncRoles([$admin]);

        Permission::create(['name' => 'Crear Subdepartamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar Subdepartamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar Subdepartamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar Subdepartamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar Subdepartamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar Subdepartamento'])->syncRoles([$admin]);
        
        Permission::create(['name' => 'Crear Departamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar Departamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar Departamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar Departamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar Departamento'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar Departamento'])->syncRoles([$admin]);

        Permission::create(['name' => 'Crear Caja'])->syncRoles([$admin]);
        Permission::create(['name' => 'Editar Caja'])->syncRoles([$admin]);
        Permission::create(['name' => 'Actualizar Caja'])->syncRoles([$admin]);
        Permission::create(['name' => 'Eliminar Caja'])->syncRoles([$admin]);
        Permission::create(['name' => 'Mostrar Caja'])->syncRoles([$admin]);
        Permission::create(['name' => 'Listar Caja'])->syncRoles([$admin]);

        $Fabi=User::find(1);
        $visita=User::find(2);

        $Fabi->assignRole('admin');
        $visita->assignRole('cliente');
        //dd($visita);
    }

        
        
    

}
