<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

/*

php artisan migrate -- Para realizar una migracion
php artisan migrate:rollback -- Para revertir el ultimo cambio hecho en una migracion
php artisan migrate:reset --- Para resetear de cero la tabla de la migracion en la base de datos
php artisan make:migration nombreDeLaMigracion --Para crear una nueva migracion con laravel
php artisan make:migration nombreDelCambioDeMigracion --table=tablaALaQueQueremosAPuntar -- Esto es para realizar un cambio en una migracion
*/