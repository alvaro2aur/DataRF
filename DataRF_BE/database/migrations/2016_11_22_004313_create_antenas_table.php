<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antenas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('bandas');
            $table->string('AV_900');
            $table->string('AH_900');
            $table->string('AV_1800');
            $table->string('AH_1800');
            $table->string('TE_900');
            $table->string('TE_1800');
            $table->string('GAN_900');
            $table->string('GAN_1800');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antenas');
    }
}
