<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMulaiKuis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mulai_kuis', function (Blueprint $table) {
            $table->increments('id_mulai_kuis');
            $table->integer('nik_akun');
            $table->integer('id_kuis');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mulai_kuis');
    }
}
