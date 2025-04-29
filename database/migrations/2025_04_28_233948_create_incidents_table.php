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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('salle');
            $table->string('poste');
            $table->string('batiment');
            $table->string('materiel');
            $table->string('etat');
            $table->string('priorité');
            $table->timestamps('dateHeureFermeture');
            $table->timestamps('dateHeureOuverture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
