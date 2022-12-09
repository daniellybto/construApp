<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasProfissionaisUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias_profissionais_usuarios', function (Blueprint $table) {
            // $table->unsignedBigInteger('id_experiencias_profissionais');
            // $table->foreign('id_experiencias_profissionais')->references('id')->on('experiencias_profissionais');
            // $table->unsignedBigInteger('id_usuario');
            // $table->foreign('id_usuario')->references('id')->on('usuarios');

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
        Schema::dropIfExists('experiencias_profissionais_usuarios');
    }
}
