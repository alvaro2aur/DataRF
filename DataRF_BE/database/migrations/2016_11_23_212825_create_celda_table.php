<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCeldaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celda', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->unique();
            $table->string('cellid');
            $table->string('sector');
            $table->integer('tecno_id')->unsigned();
            $table->foreign('tecno_id')->references('id')->on('tecno');
            $table->integer('controladora_id')->unsigned();
            $table->foreign('controladora_id')->references('id')->on('controladora');
            $table->integer('subtecno_id')->unsigned();
            $table->foreign('subtecno_id')->references('id')->on('subtecno');
            $table->string('lac');
            $table->string('rac');
            $table->string('ura');
            $table->string('psc');
            $table->string('uarfcnDl');
            $table->string('uarfcnUl');
            $table->string('ret');
            $table->integer('antenas_id')->unsigned();
            $table->foreign('antenas_id')->references('id')->on('antenas');
            $table->integer('estaciones_id')->unsigned();
            $table->foreign('estaciones_id')->references('id')->on('estaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celda');
    }
}
