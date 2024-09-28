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
        Schema::create('empregado', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('cpf', 15);
            $table->string('ctps', 20);
            $table->string('serie', 10);
            $table->date('data_nascimento');
            $table->date('data_admissao');
            $table->date('data_demissao')->nullable();
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setor');
            $table->unsignedBigInteger('funcao_id');
            $table->foreign('funcao_id')->references('id')->on('funcao');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empregado');
    }
};
