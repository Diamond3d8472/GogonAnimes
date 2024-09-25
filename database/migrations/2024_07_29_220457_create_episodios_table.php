<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('episodios', function (Blueprint $table) {

            //colunas
            $table->id('cod_episodio');
            $table->unsignedBigInteger('temporada_cod_temporada');
            $table->timestamps();
            $table->integer('num_ep');
            $table->string('nome');
            $table->string('foto');
            $table->string('video');
            $table->longText('descricao');
            $table->dateTime('datatempo_criacao', precision: 0)->useCurrent();

            //Chaves estrangeiras
            $table->foreign('temporada_cod_temporada')->references('cod_temporada')->on('temporadas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodios');
    }
};
