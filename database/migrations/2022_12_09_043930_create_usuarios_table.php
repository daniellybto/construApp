<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_tipo_usuario');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipos_usuarios');
            $table->unsignedBigInteger('id_imagens');
            $table->foreign('id_imagens')->references('id')->on('imagens');
            $table->unsignedBigInteger('id_cidade');
            $table->foreign('id_cidade')->references('id')->on('cidade');


            $table->string('primeiro_nome', 45);
            $table->string('sobrenome', 45);
            $table->string('apelido', 20);
            $table->date('data_nascimento');
            $table->string('email', 45)->unique();
            $table->string('senha', 45);
            $table->string('whatsapp', 20);
            $table->string('status', 20);

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
        Schema::dropIfExists('usuarios');
    }
}
