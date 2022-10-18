<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Puntos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos', function (Blueprint $table) {
        $table->id();
        $table->integer('punto');
        $table->integer('nivel');
        $table->integer('intento')->nullable();
        $table->integer('numero_pregunta')->nullable();
        $table->foreign('user_id')
        ->references('id')->on('users')
        ->onDelete('cascade');
        $table->rememberToken();
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
        Schema::dropIfExists('puntos');
    }
}
