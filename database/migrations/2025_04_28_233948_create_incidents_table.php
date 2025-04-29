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
  
            $table->string('priorite');
                     
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('materiel_id')->unsigned();
            $table->foreign('materiel_id')->references('id')->on('materiels')->onDelete('cascade');

            $table->bigInteger('etat_id')->unsigned()->default(1);
            $table->foreign('etat_id')->references('id')->on('etats')->onDelete('cascade');

            $table->timestamps();
            
    
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
