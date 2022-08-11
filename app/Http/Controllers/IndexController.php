<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

class IndexController extends Controller
{
    public function Index(Request $request)
    {
        $nik_akun = Session::get('nik_akun');
        
        $divisi = Session::get('divisi');

        $pengumuman = DB::table('pengumuman')->orderBy('id_pengumuman', 'desc')->limit(5)->get();
        
        $materi = DB::table('materi')->where('divisi', 'like',"%".$divisi."%")->where('status', 'tampil')->orderBy('id_materi', 'desc')->limit(3)->get();

        // $cek_hasil_kuis = DB::table('hasil_kuis')->where('nik_akun', $nik_akun)->first();

        $kuis = DB::table('kuis')->where('divisi', 'like',"%".$divisi."%")->where('status', 'tampil')->orderBy('id_kuis', 'desc')->limit(2)->get();
        
        $kuis_search = DB::table('kuis')->orderBy('id_kuis', 'desc')->get();
        
		$cari_id_kuis = $request->cari_id_kuis;

        $kuis_cari = DB::table('kuis')->where('id_kuis',$cari_id_kuis)->get();

        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();

        // $hasil_kuis = DB::table('hasil_kuis')->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
        // ->join('kuis', 'hasil_kuis.id_kuis', '=', 'kuis.id_kuis')->orderBy('nilai', 'desc')->get();

        // $rata_rata_nilai_berdasarkan_lokasi = DB::table('hasil_kuis')->select(DB::raw('avg(nilai) as rata_rata_nilai_berdasarkan_lokasi'), 'lokasi')
        // ->where('id_kuis','like',"%".$cari_id_kuis."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')->groupBy('data_karyawan.lokasi')
        // ->orderBy('data_karyawan.lokasi', 'asc')->get();

        $rata_rata_nilai_berdasarkan_lokasi = DB::table('hasil_kuis')->select(DB::raw('round(avg(nilai), 2) as rata_rata_nilai_berdasarkan_lokasi'), 'lokasi')
        ->where('id_kuis','like',"%".$cari_id_kuis."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')->groupBy('data_karyawan.lokasi')
        ->orderBy('data_karyawan.lokasi', 'asc')->get();

        // $rata_rata_nilai_berdasarkan_lokasi = DB::table('hasil_kuis')->select(DB::raw('avg(nilai)::number_format(10,2) as rata_rata_nilai_berdasarkan_lokasi'), 'lokasi')
        // ->where('id_kuis','like',"%".$cari_id_kuis."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')->groupBy('data_karyawan.lokasi')
        // ->orderBy('data_karyawan.lokasi', 'asc')->get();

        // $bagan_hasil_kuis = DB::table('hasil_kuis')->select(DB::raw('COUNT(*) as rata_rata_nilai_berdasarkan_lokasi'), 'lokasi')
        // ->where('id_kuis','like',"%".$cari_id_kuis."%")->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')->groupBy('data_karyawan.lokasi')
        // ->orderBy('data_karyawan.lokasi', 'asc')->get();

        // $bagan_hasil_kuis = DB::table('hasil_kuis')->select('nilai', 'lokasi')->where('id_kuis','like',"%".$cari_id_kuis."%")
        // ->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
        // ->orderBy('data_karyawan.lokasi', 'asc')->get();

        // $nilai_bagan_hasil_kuis = DB::table('hasil_kuis')->select('nilai')->where('id_kuis','like',"%".$cari_id_kuis."%")
        // ->join('data_karyawan', 'hasil_kuis.nik_akun', '=', 'data_karyawan.nik_karyawan')
        // ->orderBy('data_karyawan.lokasi', 'asc')->get();

        // $jumlah_nilai = 0;
        // foreach($nilai_bagan_hasil_kuis as $hasil_kuis_bagan){
        //     $jumlah_nilai += $hasil_kuis_bagan->nilai;
        // }
        // $rata_rata_nilai_berdasarkan_lokasi = $jumlah_nilai;

        return view('index')->with('pengumuman', $pengumuman)->with('materi', $materi)->with('kuis', $kuis)->with('lokasi', $lokasi)
        ->with('kuis_search', $kuis_search)->with('cari_id_kuis', $cari_id_kuis)->with('rata_rata_nilai_berdasarkan_lokasi', $rata_rata_nilai_berdasarkan_lokasi)
        ->with('kuis_cari', $kuis_cari);
    }

}