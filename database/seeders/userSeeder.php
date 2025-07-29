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

        
        //Permission::create(['name' => 'Crear Empresa'])->syncRoles([$admin]);
        //Permission::create(['name' => 'Editar Empresa'])->syncRoles([$admin]);
        //Permission::create(['name' => 'Actualizar Empresa'])->syncRoles([$admin]);
        //Permission::create(['name' => 'Eliminar Empresa'])->syncRoles([$admin]);
        //Permission::create(['name' => 'Mostrar Empresa'])->syncRoles([$admin]);
        //Permission::create(['name' => 'Listar Empresa'])->syncRoles([$admin,$cliente]);
        
        
        // no tocar
        $rol_admin= Role::create(['name' => 'admin']);
        $rol_cliente= Role::create(['name' => 'cliente']);

        
        Permission::create(['name' => 'Listar Empresa']);
        Permission::create(['name' => 'Listar Agencia']);
        Permission::create(['name' => 'Listar Departamento']);
        Permission::create(['name' => 'Listar Subdepartamento']);
        Permission::create(['name' => 'Listar Tipodocumento']);
        Permission::create(['name' => 'Listar Roles']);
        Permission::create(['name' => 'Listar Usuario']);


        $user_admin=User::find(1);
        $user_visita=User::find(2);

        $rol_admin->givePermissionTo(["Listar Empresa"]);
        $rol_admin->givePermissionTo(["Listar Agencia"]);
        $rol_admin->givePermissionTo(["Listar Departamento"]);
        $rol_admin->givePermissionTo(["Listar Subdepartamento"]);
        $rol_admin->givePermissionTo(["Listar Tipodocumento"]);
        $rol_admin->givePermissionTo(["Listar Roles"]);
        $rol_admin->givePermissionTo(["Listar Usuario"]);

        
        $user_admin->assignRole('admin');
        $user_visita->assignRole('cliente');
        //dd($visita);
    }

        
        
    

}
