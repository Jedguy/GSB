<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Visiteur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteur', function (Blueprint $table) {
            $table->string('VIS_MATRICULE')->length(10)->primary();
            $table->string('VIS_NOM')->length(25);
            $table->string('VIS_PRENOM')->length(50);
            $table->string('VIS_ADRESSE')->length(50);
            $table->string('VIS_CP')->length(5);
            $table->string('VIS_VILLE')->length(30);
            $table->dateTime('VIS_DATEEMBAUCHE');
            $table->string('SEC_CODE')->length(1)->nullable();
            $table->string('LAB_CODE')->length(2);
            
            $table->foreign('SEC_CODE')->references('SEC_CODE')->on('secteur');
            $table->foreign('LAB_CODE')->references('LAB_CODE')->on('labo');

            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteur');
    }
}
