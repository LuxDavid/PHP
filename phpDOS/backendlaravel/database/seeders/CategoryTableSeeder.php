<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['name' => 'Comida'],
            ['name' => 'Bebida'],
            ['name' => 'Alcohol'],
        ]);
    }
}

/*

php artisan make:seeder nombreDelSeeder -- Comando para crear un seeder (rellenar base de datos con datos de prueba)
*/
