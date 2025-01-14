<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio', 8, 2)->nullable(); // Nueva columna para el precio
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
