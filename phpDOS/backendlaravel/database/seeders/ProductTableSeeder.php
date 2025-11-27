<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use function Symfony\Component\Clock\now;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();

        $categorysIds= DB::table("category")->pluck("id")->toArray();

        if(empty($categorysIds)){
            $this->command->warn("No hay categorias en la tabla category");
            return;
        }

        $products=[];

        for ($i=1; $i <= 50 ; $i++) { 
            // $products[]= [
            //     'name' => 'Producto ' .$i,
            //     'description' => 'Descripcion del producto '. $i,
            //     'price' => rand(100,1000),
            //     'category_id' => $categorysIds[array_rand($categorysIds)],
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ];

             $products[]= [
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2,10,500),
                'category_id' => $faker->randomElement($categorysIds),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table("product")->insert($products);
    }
}

/*
php artisan db:seed --class=nombreDelSeeder -- Comando para solo ejectutar un seeder
php artisan db:seed --class=ProductTableSeeder
*/
