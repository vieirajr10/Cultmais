<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('local', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 90);
            $table->string('descricao', 150);
            $table->string('imagem', 200);
            $table->string('rua', 80);
            $table->string('bairro', 80);
            $table->string('cidade', 90);
            $table->string('cep', 9);
            $table->string('estado', 2);
            $table->string('latitude', 40)->nullable();
            $table->string('longitude', 40)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->unsignedBigInteger('regiao_id');
            $table->foreign('regiao_id')->references('id')->on('regiao');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('local');
    }
};
