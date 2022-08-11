<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class SoalIsian extends Model
{
    protected $table = "soal_isian";
 
    protected $fillable = ['soal_isian','bobot_nilai','id_kuis'];
}