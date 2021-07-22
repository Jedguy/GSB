<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Labo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labo', function (Blueprint $table) {
            $table->string('LAB_CODE')->length(2)->default(NULL)->primary();
            $table->string('LAB_NOM')->length(10)->default(NULL);
            $table->string('LAB_CHEFVENTE')->length(20)->default(NULL);

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
        Schema::dropIfExists('labo');
    }
}
