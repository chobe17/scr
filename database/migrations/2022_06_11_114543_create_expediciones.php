<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpediciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('numero_factura');
            $table->integer('odc');
            $table->string('codigo_producto');
            $table->string('descripcion_producto');
            $table->string('clave');
            $table->integer('cantidad_pallets');
            $table->integer('cantidad_cajas');
            $table->integer('total_cajas');
            $table->integer('cantidad_piezas');
            $table->integer('total_piezas');
            $table->string('numero_sello');
            $table->string('c_embarque');
            $table->string('a_tarima');
            $table->string('c_selladas');
            $table->string('i_lados');
            $table->string('l_embarque');
            $table->string('i_embarque');
            $table->string('peps');
            $table->string('c_factura');
            $table->string('observaciones');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediciones');
    }
}
