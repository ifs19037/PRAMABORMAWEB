<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class DataKaryawan extends Model
{
    protected $table = "data_karyawan";
 
    protected $fillable = ['nama_karyawan','nik_karyawan','jenis_kelamin','jabatan','divisi','lokasi',
    'tanggal_lahir','tanggal_masuk','email','no_telepon','alamat_ktp','foto_karyawan'];
}