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
        Schema::create('comentarios', function (Blueprint $table) {

            //Colunas
            $table->id('cod_comentario');
            $table->unsignedBigInteger('episodio_cod_episodio');
            $table->unsignedBigInteger('user_cod_user');
            $table->timestamps();
            $table->longText('comentario');
            $table->dateTime('datatempo_criacao', precision: 0)->useCurrent();

            //Chaves Estrangeiras

            $table->foreign('episodio_cod_episodio')->references('cod_episodio')->on('episodios');
            $table->foreign('user_cod_user')->references('cod_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
