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
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id('cod_favoritos');
            $table->unsignedBigInteger('anime_cod_anime');
            $table->unsignedBigInteger('user_cod_user');
            $table->timestamps();
            $table->dateTime('datatempo_criacao', precision: 0)->useCurrent();

            //Chaves Estrangeiras

            $table->foreign('anime_cod_anime')->references('cod_anime')->on('animes');
            $table->foreign('user_cod_user')->references('cod_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoritos');
    }
};
