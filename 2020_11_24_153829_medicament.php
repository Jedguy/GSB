<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medicament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament', function (Blueprint $table) {
            $table->string('MED_DEPOTLEGAL')->length(10)->primary();
            $table->string('MED_NOMCOMMERCIAL')->length(25);
            $table->string('FAM_CODE')->length(3);
            $table->string('MED_COMPOSITION');
            $table->string('MED_EFFETS');
            $table->longText('MED_CONTREINDIC');
            $table->float('MED_PRIXECHANTILLON');

            $table->foreign('FAM_CODE')->references('FAM_CODE')->on('famille');

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
        Schema::dropIfExists('medicament');
    }
}
