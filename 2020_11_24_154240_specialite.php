<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Specialite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialite', function (Blueprint $table) {
            $table->string('SPE_CODE')->length(5)->primary();
            $table->string('SPE_LIBELLE')->length(150);

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
        Schema::dropIfExists('specialite');
    }
}
