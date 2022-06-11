<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMermaDiariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mermas_diarias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('produccion');
            $table->integer('descartes');
            $table->float('merma',6,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mermas_diarias');
    }
}
