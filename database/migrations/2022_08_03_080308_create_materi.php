<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->increments('id_materi');
            $table->string('judul_materi', 150);
            $table->string('keterangan_singkat', 250);
            $table->string('foto_materi', 100);
            $table->string('divisi', 500);
            $table->string('kode_link_video', 100);
            $table->string('isi_materi', 5000);
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
        Schema::dropIfExists('materi');
    }
}
