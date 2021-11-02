<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_producto', 150);
            $table->string('nombre', 200);
            $table->integer('precio');
            $table->integer('cantidad');
            $table->datetime('fecha_vencimiento');
            $table->char('estado', 1);
            $table->foreignId('id_marca')->constrained('marcas');
            $table->foreignId('id_categoria')->constrained('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
