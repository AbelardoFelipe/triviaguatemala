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
        $table->engine = 'InnoDB';
        $table->bigIncrements('id');
        $table->foreignId('user_id')
        ->nullable()
        ->constrained('users')
        ->onUpdate('cascade')
        ->onDelete('cascade');
        $table->integer('numero_pregunta')->nullable();
        $table->integer('nivel')->nullable();                
        $table->integer('intento')->nullable();
        $table->integer('punto')->nullable(); 
        $table->boolean('aprobado')->nullable();         
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
