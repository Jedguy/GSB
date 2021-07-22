<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypePraticien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_praticien', function (Blueprint $table) {
            $table->string('TYP_CODE')->length(3)->primary();
            $table->string('TYP_LIBELLE')->length(25);
            $table->string('TYP_LIEU')->length(35);

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
        Schema::dropIfExists('type_praticien');
    }
}