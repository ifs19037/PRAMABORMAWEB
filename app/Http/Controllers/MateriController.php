<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

class MateriController extends Controller
{
    public function ManajemenMateri()
    {
        $materi = DB::table('materi')->orderBy('id_materi', 'desc')->get();
        
        return view('manajemen_materi')->with('materi', $materi);
    }

    public function ManajemenMateriCari(Request $request)
    {
		$cari = $request->cari;
        
        $materi = DB::table('materi')->where('judul_materi','like',"%".$cari."%")->orderBy('id_materi', 'desc')->get();

        return view('manajemen_materi')->with('materi', $materi);
    }

    public function TambahMateri()
    {
        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();

        return view('tambah_materi')->with('divisi', $divisi);
    }

    public function PostTambahMateri(Request $request)
    {
        $judul_materi = $request -> judul_materi;
        $keterangan_singkat = $request -> keterangan_singkat;
        $foto_materi = $request -> file('foto_materi');
        $foto_kosong = $request -> foto_kosong;
        $divisi = $request -> divisi;
        $kode_link_video = $request -> kode_link_video;
        $isi_materi = $request -> isi_materi;

        if(empty($foto_materi)){
            $nama_foto = $foto_kosong;
        }

        else{
            $nama_foto = time().'_'.$foto_materi->getClientOriginalName();
            $tujuan_upload = './asset/u_file/foto_materi';
            $foto_materi->move($tujuan_upload,$nama_foto);
        }

        if(empty($kode_link_video)){
            $kode_link_video = "-";
        }

        if(empty($divisi)){
            $divisi_fix = "-";
        }

        else{
            $divisi_fix = $divisi;
        }

        DB::table('materi')->insert([
            'judul_materi' => $judul_materi,
            'keterangan_singkat' => $keterangan_singkat,
            'foto_materi' => $nama_foto,
            'divisi' => "-",
            'kode_link_video' => $kode_link_video,
            'isi_materi' => $isi_materi,
            'status' => "tampil",
        ]);

        $id_materi = DB::table('materi')->select('id_materi')->orderBy('id_materi', 'desc')->limit(1)->first();

        DB::table('materi')->where('id_materi', $id_materi->id_materi)->update([
            'divisi' => $divisi_fix,
        ]);

        return redirect('./manajemen_materi');
    }

    public function DetailMateri($id_materi)
    {
        $materi = DB::table('materi')->where('id_materi', $id_materi)->get();
        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();

        return view('detail_materi')->with('materi', $materi)->with('divisi', $divisi);
    }

    public function PostEditMateri(Request $request){
        $id_materi = $request -> id_materi;
        $judul_materi = $request -> judul_materi;
        $keterangan_singkat = $request -> keterangan_singkat;
        $foto_materi = $request -> file('foto_materi');
        $foto_materi_lama = $request -> foto_materi_lama;
        $divisi = $request -> divisi;
        $divisi_lama = $request -> divisi_lama;
        $kode_link_video = $request -> kode_link_video;
        $isi_materi = $request -> isi_materi;
        $status = $request -> status;

        if(empty($foto_materi)){
            $nama_foto = $foto_materi_lama;
        }

        else{
            $nama_foto = time().'_'.$foto_materi->getClientOriginalName();
            $tujuan_upload = './asset/u_file/foto_materi';
            $foto_materi->move($tujuan_upload,$nama_foto);
        }

        if(empty($kode_link_video)){
            $kode_link_video = "-";
        }

        if(empty($divisi)){
            $divisi_fix = $divisi_lama;
        }

        else{
            $divisi_fix = $divisi;
        }

        DB::table('materi')->where('id_materi', $id_materi)->update([
            'judul_materi' => $judul_materi,
            'keterangan_singkat' => $keterangan_singkat,
            'foto_materi' => $nama_foto,
            'divisi' => $divisi_fix,
            'kode_link_video' => $kode_link_video,
            'isi_materi' => $isi_materi,
            'status' => $status,
        ]);

        return redirect('./manajemen_materi');
    }


    public function HapusMateri(Request $request)
    {
        $id_materi = $request -> id_materi;

        DB::table('materi')->where('id_materi', $id_materi)->delete();
        
        return redirect('./manajemen_materi');
    }
    
    public function ReviewMateri($id_materi)
    {
        $materi = DB::table('materi')->where('id_materi', $id_materi)->get();

        $akses_materi = DB::table('akses_materi')->select('data_karyawan.nama_karyawan', 'data_karyawan.nik_karyawan', 'data_karyawan.lokasi', 'akses_materi.created_at', 'akses_materi.updated_at')
        ->where('id_materi', $id_materi)->join('data_karyawan', 'akses_materi.nik_akun', '=', 'data_karyawan.nik_karyawan')->orderBy('data_karyawan.nik_karyawan', 'asc')->get();

        return view('review_materi')->with('materi', $materi)->with('akses_materi', $akses_materi);
    }

    public function Materi()
    {

        $divisi = Session::get('divisi');

        // $materi = DB::table('materi')->where('divisi', $divisi)->where('status', 'tampil')->orderBy('id_materi', 'desc')->get();
        $materi = DB::table('materi')->where('divisi', 'like',"%".$divisi."%")->where('status', 'tampil')->orderBy('id_materi', 'desc')->get();

        return view('materi')->with('materi', $materi);
    }

    public function MateriCari(Request $request)
    {
        $divisi = Session::get('divisi');
        
		$cari = $request->cari;
        
        // $materi = DB::table('materi')->where('divisi', $divisi)->where('status', 'tampil')->where('judul_materi','like',"%".$cari."%")->orderBy('id_materi', 'desc')->get();
        $materi = DB::table('materi')->where('divisi', 'like',"%".$divisi."%")->where('status', 'tampil')->where('judul_materi','like',"%".$cari."%")->orderBy('id_materi', 'desc')->get();

        return view('materi')->with('materi', $materi);
    }

    public function LihatMateri($id_materi)
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $nik_akun = Session::get('nik_akun');

        $materi = DB::table('materi')->where('id_materi', $id_materi)->get();
        
        $akses_materi = DB::table('akses_materi')->where('nik_akun',$nik_akun)->where('id_materi',$id_materi)->first();

        if(!$akses_materi){
            DB::table('akses_materi')->insert([
                'nik_akun' => $nik_akun,
                'id_materi' => $id_materi,
            ]);
            
        }

        elseif($akses_materi){
            DB::table('akses_materi')->where('id_akses_materi', $akses_materi->id_akses_materi)->update([
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }





        elseif($akses_materi){
            DB::table('akses_materi')->where('id_akses_materi', $akses_materi->id_akses_materi)->update([
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }



        

        

        return view('lihat_materi')->with('materi', $materi);
    }

}