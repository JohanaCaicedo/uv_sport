<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_integrantes', function (Blueprint $table) {
            $table->bigIncrements('id');      
            
            $table->unsignedBigInteger('equipo_id');
            $table->foreign('equipo_id')
                  ->references('id')->on('equipos');

            $table->unsignedBigInteger('integrante_id');
            $table->foreign('integrante_id')
                        ->references('id')->on('integrantes');   

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
        Schema::dropIfExists('equipo_integrantes');
    }
}
