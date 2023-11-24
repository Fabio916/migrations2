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
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->integer('filial_id');
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->integer('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->integer('estoqueMinimo')->nullable();
            $table->integer('estoqueMaximo')->nullable();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produto_filiais');
    }
};
