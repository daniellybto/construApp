<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_avaliacao');
            $table->foreign('id_avaliacao')->references('id')->on('avaliacao');
            $table->unsignedBigInteger('id_usuario_contratante');
            $table->foreign('id_usuario_contratante')->references('id')->on('usuarios');
            $table->unsignedBigInteger('id_usuario_profissional');
            $table->foreign('id_usuario_profissional')->references('id')->on('usuarios');
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
        Schema::dropIfExists('avaliacao_usuario');
    }
}
