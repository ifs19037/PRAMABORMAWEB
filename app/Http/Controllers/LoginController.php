<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class LoginController extends Controller
{
    public function PostLogin(Request $request){

        $nik_akun = $request->nik_akun;
        $password = $request->password;

        $data_1 = DB::table('akun')->where('nik_akun',$nik_akun)->where('password',$password)->first();
        if($data_1){
            if($data_1->level ==1){
                Session::put('nik_akun',$data_1->nik_akun);
                Session::put('password',$data_1->password);
                Session::put('level',$data_1->level);
                Session::put('login',TRUE);
                return redirect('./');
            }
        }

        
        $data_2 = DB::table('akun')->where('nik_akun',$nik_akun)->where('password',$password)
        ->join('data_karyawan', 'akun.nik_karyawan', '=', 'data_karyawan.nik_karyawan')->first();
        if($data_2){
            if ($data_2->level ==2) {
                Session::put('nik_akun',$data_2->nik_akun);
                Session::put('password',$data_2->password);
                Session::put('level',$data_2->level);
                Session::put('foto_karyawan',$data_2->foto_karyawan);
                Session::put('divisi',$data_2->divisi);
                Session::put('login',TRUE);
                return redirect('./');
            }
        }
        else{
            return redirect('./')->with('alert','NIP atau Kata Sandi salah');
        }
    }
}