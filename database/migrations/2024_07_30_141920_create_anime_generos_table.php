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
        Schema::create('anime_generos', function (Blueprint $table) {

            //Criando tabelas
            $table->id('cod_animegenero');
            $table->unsignedBigInteger('anime_cod_anime');
            $table->unsignedBigInteger('genero_cod_genero');
            $table->timestamps();
            $table->dateTime('datatempo_criacao', precision: 0)->useCurrent();

            $table->foreign('anime_cod_anime')->references('cod_anime')->on('animes');
            $table->foreign('genero_cod_genero')->references('cod_genero')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_generos');
    }
};
