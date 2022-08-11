<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanKuisIsian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_kuis_isian', function (Blueprint $table) {
            $table->increments('id_jawaban_kuis_isian');
            $table->integer('nik_akun');
            $table->integer('id_mulai_kuis');
            $table->integer('id_kuis');
            $table->integer('id_soal_isian');
            $table->string('jawaban', 2500);
            $table->string('poin', 11);
            $table->timestampsTz($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_kuis_isian');
    }
}
