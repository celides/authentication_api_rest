<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('rols')->insert([
            ['nombre' => 'Administrador'],
            ['nombre' => 'Usuario'],
            ['nombre' => 'Editor'],
            ['nombre' => 'Invitado'],
        ]);

    }
}
