<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sop', function (Blueprint $table) {
            $table->increments('id_sop');
            $table->string('judul_sop', 150);
            $table->string('keterangan_singkat', 250);
            $table->string('foto_sop', 100);
            $table->string('file_sop', 100);
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
        Schema::dropIfExists('sop');
    }
}
