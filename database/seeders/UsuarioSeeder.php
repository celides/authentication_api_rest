<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['nombre' => 'Admin', 'email' => 'admin@example.com', 'password' => Hash::make('contraseña')],
            ['nombre' => 'Usuario1', 'email' => 'usuario1@example.com', 'password' => Hash::make('contraseña')],
            ['nombre' => 'Usuario2', 'email' => 'usuario2@example.com', 'password' => Hash::make('contraseña')],
        ]);    }
}
