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
        Schema::create('tarif_parkings', function (Blueprint $table) {
           
            $table->unsignedBigInteger('idPark');
            $table->unsignedBigInteger('idType');
            $table->float('prix');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarif_parkings');
    }
};
