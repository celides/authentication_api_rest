<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use App\Models\Bitacora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BitacoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bitacoras')->insert([
            ['descripcion' => 'Acceso al sistema', 'usuario_id' => 1],
            ['descripcion' => 'Actualización de perfil', 'usuario_id' => 2],
            ['descripcion' => 'Eliminación de contenido', 'usuario_id' => 1],
        ]);
        
    }
}
