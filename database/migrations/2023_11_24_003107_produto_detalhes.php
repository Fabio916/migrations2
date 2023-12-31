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
        Schema::create('produto_detalhess', function (Blueprint $table) {
            $table->id();
            $table->double('comprimento')->nullable();
            $table->double('largura')->nullable();
            $table->double('altura')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_detalhess');
    }
};
