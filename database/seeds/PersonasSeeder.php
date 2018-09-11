<?php

use Illuminate\Database\Seeder;
//Siempre tienes que lalmar esta wea para que funcionen las llamadas a las bvases de datos
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('personas')->insert([
            'PersonasPriApellido' => 'Jimenez',
        ]);
        DB::table('personas')->insert([
            'PersonasPriApellido' => 'Jaramillo',
        ]);
        DB::table('personas')->insert([
            'PersonasPriApellido' => 'Urrutia',
        ]);
    }
}
