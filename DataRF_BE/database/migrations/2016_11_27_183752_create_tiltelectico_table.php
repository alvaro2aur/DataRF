<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiltelecticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiltelectico', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('valor');
            $table->integer('celda_id')->unsigned();
            $table->foreign('celda_id')->references('id')->on('celda');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiltelectico');
    }
}
