<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Chuquisaca',
            'sigla' => 'CH',
            'codigo' => '01',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'La Paz',
            'sigla' => 'LP',
            'codigo' => '02',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Cochabamba',
            'sigla' => 'CB',
            'codigo' => '03',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Oruro',
            'sigla' => 'OR',
            'codigo' => '04',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Potosí',
            'sigla' => 'PT',
            'codigo' => '05',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Tarija',
            'sigla' => 'TJ',
            'codigo' => '06',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Santa Cruz',
            'sigla' => 'SC',
            'codigo' => '07',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Beni',
            'sigla' => 'BE',
            'codigo' => '08',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Pando',
            'sigla' => 'PD',
            'codigo' => '09',
        ]);        
    }
}
