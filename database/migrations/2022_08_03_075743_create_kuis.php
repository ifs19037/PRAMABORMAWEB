<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->increments('id_kuis');
            $table->string('judul_kuis', 150);
            $table->string('keterangan_singkat', 250);
            $table->string('tipe_kuis', 20);
            $table->string('foto_kuis', 100);
            $table->date('tanggal_kuis');
            $table->double('durasi_pengerjaan', 8, 2);
            $table->string('divisi', 500);
            $table->string('link_kusioner', 100);
            $table->string('status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuis');
    }
}
