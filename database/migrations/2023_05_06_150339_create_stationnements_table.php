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
        Schema::create('stationnements', function (Blueprint $table) {
            $table->id('idS');
            $table->date('dateStat');
            $table->integer('nbUnit');
            $table->boolean('reserver')->default(false);
            $table->unsignedBigInteger('idUtilisateur');
            $table->unsignedBigInteger('idPark');
            $table->unsignedBigInteger('idType');
            $table->foreign('idUtilisateur')
                  ->references('idU')
                  ->on('util2isateurs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('idPark')
                  ->references('idPark')
                  ->on('parkings')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('idType')
                  ->references('idT')
                  ->on('type_tarifs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationnements');
    }
};
