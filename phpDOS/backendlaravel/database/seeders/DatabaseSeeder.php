<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory(3)->create()->each(function ($category){
            Product::factory(10)->create(["category_id" => $category]);
        });
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     CategoryTableSeeder::class,
        //     ProductTableSeeder::class
        // ]);
    }
}

/*
php artisan db:seed -- Comando para ejecturar los seeder en la funcion this->call

php arisan migrate:fresh --seed -- Este comando borra todas las tablas de la base de datos
y la vuelve a rellenar con los seeders que tengamos



*/
