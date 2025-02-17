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
        Schema::table('propiedades', function (Blueprint $table) {
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('category_id');
            $table->index('agent_id');
            $table->index('category_id');

            $table->foreign('agent_id')->references('id')->on('agentes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categorias')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->dropForeign(['agent_id', 'category_id']);
            $table->dropIndex(['agent_id', 'category_id']);
        });
    }
};
