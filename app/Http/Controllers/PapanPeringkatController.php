<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

class PapanPeringkatController extends Controller
{
    public function PapanPeringkat(Request $request)
    {
		$cari_nama_divisi = $request->cari_nama_divisi;
		$cari_id_kuis = $request->cari_id_kuis;
		$cari_id_lokasi = $request->cari_id_lokasi;

        // $hasil_kuis = DB::table('hasil_kuis')->get();
        $hasil_kuis = DB::table('hasil_kuis')->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
        ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        
        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();

        $kuis = DB::table('kuis')->orderBy('id_kuis', 'desc')->get();
        
        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();
        
        return view('papan_peringkat')->with('hasil_kuis', $hasil_kuis)->with('divisi', $divisi)->with('kuis', $kuis)->with('lokasi', $lokasi)
        ->with('cari_nama_divisi', $cari_nama_divisi)->with('cari_id_kuis', $cari_id_kuis)->with('cari_id_lokasi', $cari_id_lokasi);
    }

    public function PapanPeringkatCari(Request $request)
    {
		$cari_nama_divisi = $request->cari_nama_divisi;
        
		$cari_id_kuis = $request->cari_id_kuis;

        $kuis_cari = DB::table('kuis')->where('id_kuis',$cari_id_kuis)->get();

		$cari_nama_lokasi = $request->cari_nama_lokasi;

        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();

        $kuis = DB::table('kuis')->orderBy('id_kuis', 'desc')->get();
        
        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();
        
        // if($cari_nama_lokasi==""){
        //     $hasil_kuis = DB::table('hasil_kuis')->where('kuis.divisi','like',"%".$cari_nama_divisi."%")->where('kuis.id_kuis','like',"%".$cari_id_kuis."%")
        //     ->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
        //     ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        // }

        // elseif($cari_nama_lokasi!=""){
        //     $hasil_kuis = DB::table('hasil_kuis')->where('kuis.divisi','like',"%".$cari_nama_divisi."%")->where('kuis.id_kuis','like',"%".$cari_id_kuis."%")
        //     ->where('data_karyawan.lokasi','like',"%".$cari_nama_lokasi."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
        //     ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        // }

        if($cari_nama_lokasi==""){
            $hasil_kuis = DB::table('hasil_kuis')->where('kuis.id_kuis',$cari_id_kuis)
            ->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
            ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        }

        elseif($cari_nama_lokasi!=""){
            $hasil_kuis = DB::table('hasil_kuis')->where('kuis.id_kuis',$cari_id_kuis)
            ->where('data_karyawan.lokasi','like',"%".$cari_nama_lokasi."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
            ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        }
        
        if($cari_nama_lokasi==""){
            $hasil_kuis = DB::table('hasil_kuis')->where('kuis.id_kuis',$cari_id_kuis)
            ->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
            ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        }

        elseif($cari_nama_lokasi!=""){
            $hasil_kuis = DB::table('hasil_kuis')->where('kuis.id_kuis',$cari_id_kuis)
            ->where('data_karyawan.lokasi','like',"%".$cari_nama_lokasi."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
            ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();
        }

    }
}