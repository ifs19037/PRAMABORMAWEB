<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class SoalPilihanBerganda extends Model
{
    protected $table = "soal_pilihan_berganda";
 
    protected $fillable = ['soal_pilihan_berganda','pilihan_a','pilihan_b','pilihan_c','pilihan_d','pilihan_e','jawaban_soal_pilihan_berganda','id_kuis'];
}