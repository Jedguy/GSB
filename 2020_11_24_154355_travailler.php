<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Travailler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travailler', function (Blueprint $table) {
            $table->string('VIS_MATRICULE')->length(10);
            $table->dateTime('JJMMAA');
            $table->string('REG_CODE')->length(2);
            $table->string('TRA_ROLE')->length(11);

            $table->primary(['VIS_MATRICULE', 'JJMMAA', 'REG_CODE']);

            $table->foreign('VIS_MATRICULE')->references('VIS_MATRICULE')->on('visiteur');
            $table->foreign('REG_CODE')->references('REG_CODE')->on('region');

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
        Schema::dropifExists('travailler');
    }
}

