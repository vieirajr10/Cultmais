<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->string('cnpj', 18)->unique();
            $table->string('telefone', 15)->unique();
            $table->string('email', 35)->unique();
            $table->string('password');
            $table->string('site', 40)->unique();
            $table->integer('situation')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
