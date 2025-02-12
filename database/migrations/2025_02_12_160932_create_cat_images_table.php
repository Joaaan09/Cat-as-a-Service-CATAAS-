<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatImagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cat_images', function (Blueprint $table) {
            $table->id(); // Campo de identidad
            $table->string('_id')->unique(); // Campo único para almacenar el _id
            $table->string('mimetype');
            $table->integer('size');
            $table->json('tags'); // Campo de tipo JSON para almacenar las etiquetas
            $table->timestamps(); // Campos de fecha y hora de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_images');
    }
}
