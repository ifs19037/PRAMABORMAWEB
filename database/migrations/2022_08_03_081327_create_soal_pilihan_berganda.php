<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalPilihanBerganda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_pilihan_berganda', function (Blueprint $table) {
            $table->increments('id_soal_pilihan_berganda');
            $table->string('soal_pilihan_berganda', 3000);
            $table->string('pilihan_a', 250);
            $table->string('pilihan_b', 250);
            $table->string('pilihan_c', 250);
            $table->string('pilihan_d', 250);
            $table->string('pilihan_e', 250);
            $table->string('jawaban_soal_pilihan_berganda', 1);
            $table->integer('id_kuis');
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
        Schema::dropIfExists('soal_pilihan_berganda');
    }
}
