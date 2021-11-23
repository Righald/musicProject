<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('puntaje');
            $table->double('tiempo');
            $table->unsignedBigInteger('id_actividad');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_actividad')->references('id')->on('activities');
            $table->foreign('id_usuario')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
