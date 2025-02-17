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
        Schema::table('agentes', function (Blueprint $table) {
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agentes', function (Blueprint $table) {
            $table->dropColumn('Nombre');
            $table->dropColumn('Apellido');
            $table->dropColumn('Telefono');
            $table->dropColumn('Email');
        });
    }
};
