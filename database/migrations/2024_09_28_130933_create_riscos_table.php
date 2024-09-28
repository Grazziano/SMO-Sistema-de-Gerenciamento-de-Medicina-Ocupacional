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
        Schema::create('risco', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->unique();
            $table->unsignedBigInteger('tiporisco_id');
            $table->foreign('tiporisco_id')->references('id')->on('tiporisco');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risco');
    }
};
