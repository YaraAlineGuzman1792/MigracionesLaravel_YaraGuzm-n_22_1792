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
        Schema::table('camion', function (Blueprint $table) {
            $table->string('codig_interno', 8)->change();
            $table->string('color',35)->change();
            $table->string('capacidad_toneladas',45)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camion', function (Blueprint $table) {
            $table->string('codig_interno', 255)->change();
            $table->string('color',255)->change();
            $table->string('capacidad_toneladas',255)->change();
        });
    }
};
