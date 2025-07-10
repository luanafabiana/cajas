<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\User;
use Illuminate\Support\Facades\Hash;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'fabiluana@gmail.com')->exists()) {
            // Crear el usuario admin
            $admin = User::create([
                'name' => 'admin',
                'email' => 'fabiluana@gmail.com',
                'password' => Hash::make('13131515'), // Cambia '12345678' por tu contraseña preferida
                'email_verified_at' => now()
            ]);


        }
    }
}
