<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Offrir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offrir', function (Blueprint $table) {
            $table->string('VIS_MATRICULE')->length(10);
            $table->integer('RAP_NUM');
            $table->string('MED_DEPOTLEGAL')->length(10);
            $table->smallinteger('OFF_QTE');

            $table->primary(['VIS_MATRICULE', 'RAP_NUM', 'MED_DEPOTLEGAL']);

            $table->foreign('VIS_MATRICULE')->references('VIS_MATRICULE')->on('visiteur');
            $table->foreign('RAP_NUM')->references('RAP_NUM')->on('rapport_visite');
            $table->foreign('MED_DEPOTLEGAL')->references('MED_DEPOTLEGAL')->on('medicament');

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
        Schema::dropIfExists('offrir');
    }
}
