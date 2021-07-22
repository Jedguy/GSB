<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RapportVisites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapport_visites', function (Blueprint $table) {
            $table->id();
            $table->string('VIS_MATRICULE')->length(10);
            $table->integer('RAP_NUM');
            $table->smallinteger('PRA_NUM');
            $table->dateTime('RAP_DATE');
            $table->string('RAP_BILAN');
            $table->string('RAP_MOTIF');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('VIS_MATRICULE')->references('VIS_MATRICULE')->on('visiteur');
            $table->foreign('PRA_NUM')->references('PRA_NUM')->on('praticien');

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
        Schema::dropifExists('rapport_visites');
    }
}