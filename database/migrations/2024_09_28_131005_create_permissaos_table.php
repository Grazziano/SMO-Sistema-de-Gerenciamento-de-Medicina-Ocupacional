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
        Schema::create('permissao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipousuario_id');
            $table->foreign('tipousuario_id')->references('id')->on('tipousuario');
            $table->unsignedBigInteger('formulario_id');
            $table->foreign('formulario_id')->references('id')->on('formulario');
            $table->boolean('inclui');
            $table->boolean('altera');
            $table->boolean('exclui');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissao');
    }
};
