<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_karyawan', function (Blueprint $table) {
            $table->string('nama_karyawan', 50);
            $table->integer('nik_karyawan');
            $table->string('jenis_kelamin', 20);
            $table->string('jabatan', 100);
            $table->string('divisi', 100);
            $table->string('lokasi', 100);
            $table->date('tanggal_lahir');
            $table->date('tanggal_masuk');
            $table->string('email', 50);
            $table->bigInteger('no_telepon');
            $table->string('alamat_ktp', 150);
            $table->string('foto_karyawan', 100);
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
        Schema::dropIfExists('data_karyawan');
    }
}
