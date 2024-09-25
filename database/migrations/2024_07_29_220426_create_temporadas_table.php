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
        Schema::create('temporadas', function (Blueprint $table) {

            //Colunas
            $table->id('cod_temporada');
            $table->unsignedBigInteger('anime_cod_anime');
            $table->timestamps();
            $table->integer('num_temporada');
            $table->longText('descricao');
            $table->dateTime('datatempo_criacao', precision: 0)->useCurrent();

            //Chaves Estrangeiras
            $table->foreign('anime_cod_anime')->references('cod_anime')->on('animes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporadas');
    }
};
