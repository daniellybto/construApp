<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasProfImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias_prof_img', function (Blueprint $table) {
            $table->unsignedBigInteger('id_experiencias_profissionais');
            $table->foreign('id_experiencias_profissionais')->references('id')->on('experiencias_profissionais');
            $table->unsignedBigInteger('id_imagens');
            $table->foreign('id_imagens')->references('id')->on('imagens');
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
        Schema::dropIfExists('experiencias_prof_img');
    }
}
