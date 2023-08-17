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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('Nome', 80)->nullable(false);
            $table->string('Contato', 15)->nullable(false);
            $table->string('CPF', 14)->unique()->nullable(false);
            $table->string('Email', 100)->unique()->nullable(false);
            $table->string('InscriçãoMunicipal', 11)->nullable(false);
            $table->string('País', 100)->nullable(false);
            $table->string('CNPJ', 100)->unique()->nullable(false);
            $table->string('Bairro', 100)->nullable(false);
            $table->string('Código', 100)->unique()->nullable(false);
            $table->string('Cidade', 100)->nullable(false);
            $table->string('WebSite', 100)->unique()->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
