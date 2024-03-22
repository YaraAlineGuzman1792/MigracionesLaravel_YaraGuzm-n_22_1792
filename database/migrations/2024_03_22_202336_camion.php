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
        Schema::create('camion', function (Blueprint $table) {
            $table->id('id_camion');
            $table->string('codig_interno');
            $table->string('color');
            $table->date('modelo');
            $table->string('capacidad_toneladas');
            $table->timestamps(); // created_at updated_at
            $table->string('codig_interno', 8)->change();
            $table->string('color',35)->change();
            $table->string('capacidad_toneladas',45)->change();
            $table->string('placa',8);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
