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
            $table->unsignedBigInteger('id_transporte')->after('codig_interno');
            $table->foreign('id_transporte')->references('id_transporte')->on('transporte')->onDelete('cascade');
            $table->unsignedBigInteger('id_marca')->after('modelo');
            $table->foreign('id_marca')->references('id_marca')->on('marca')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camion', function (Blueprint $table) {
            $table->dropColumn('id_transporte');
            $table->dropForeign(['id_transporte']);
            $table->dropColumn('id_marca');
            $table->dropForeign(['id_marca']);
        });
    }
};
