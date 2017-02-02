<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->unique();
            $table->integer('cluster_id')->unsigned();
            $table->foreign('cluster_id')->references('id')->on('clusters');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('direccion');
            $table->string('longitud');
            $table->string('latitud');
            $table->string('estructura');
            $table->string('altura');
            $table->string('pisos');
            $table->string('coubi_op');
            $table->string('coubi_acc');
            $table->string('back2back');
            $table->string('vendor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estaciones');
    }
}
