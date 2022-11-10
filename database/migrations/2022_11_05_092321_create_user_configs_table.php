<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_configs', function (Blueprint $table) {            
                $table->engine = 'InnoDB';
                $table->bigIncrements('id');
                $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->boolean('notificacion_email')->nullable();
                $table->boolean('musica_fondo')->nullable();                
                $table->integer('tiempo_cache')->nullable();
                $table->string('url_cache')->nullable()->default('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel=1&grupo='); 
                $table->integer('url_cache_equipo')->nullable()->default('4');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_configs');
    }
}
