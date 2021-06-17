<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMermasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mermas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('linea');
            $table->char('maquina',20);
            $table->char('tipo_maquina',20);
            $table->char('tintas',5);
            $table->integer('codigo_analista');
            $table->string('nombre_analista');
            $table->integer('turno');
            $table->integer('grupo');
            $table->integer('produccion');
            $table->float('merma',6,2);
            $table->integer('rechazados');
            $table->string('motivo_descarte');
            $table->string('comentarios');
            $table->integer('codigo_operador');
            $table->integer('orden_produccion');
            $table->string('codigo_producto');
            $table->string('descripcion_producto');
            $table->boolean('confirmado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mermas');
    }
}
