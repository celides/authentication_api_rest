<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'edad' => 30, 'email' => 'juan@example.com'],
            ['nombre' => 'Ana', 'apellido' => 'Gómez', 'edad' => 25, 'email' => 'ana@example.com'],
            ['nombre' => 'Luis', 'apellido' => 'Martínez', 'edad' => 28, 'email' => 'luis@example.com'],
            ['nombre' => 'María', 'apellido' => 'Sánchez', 'edad' => 35, 'email' => 'maria@example.com'],
        ]);
        
    }
}
