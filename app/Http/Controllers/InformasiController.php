<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

class InformasiController extends Controller
{
    public function ManajemenJabatan()
    {
        $jabatan = DB::table('jabatan')->orderBy('nama_jabatan', 'asc')->get();

        return view('manajemen_jabatan')->with('jabatan', $jabatan);
    }

    public function PostTambahJabatan(Request $request)
    {
        $nama_jabatan = $request -> nama_jabatan;

        DB::table('jabatan')->insert([
            'nama_jabatan' => $nama_jabatan,
        ]);

        return redirect('./jabatan');
    }

    public function HapusJabatan(Request $request)
    {
        $id_jabatan = $request -> id_jabatan;

        DB::table('jabatan')->where('id_jabatan', $id_jabatan)->delete();
        
        return redirect('./jabatan');
    }

    public function ManajemenDivisi()
    {
        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();

        return view('manajemen_divisi')->with('divisi', $divisi);
    }

    public function PostTambahDivisi(Request $request)
    {
        $nama_divisi = $request -> nama_divisi;

        DB::table('divisi')->insert([
            'nama_divisi' => $nama_divisi,
        ]);

        return redirect('./divisi');
    }

    public function HapusDivisi(Request $request)
    {
        $id_divisi = $request -> id_divisi;

        DB::table('divisi')->where('id_divisi', $id_divisi)->delete();
        
        return redirect('./divisi');
    }

    public function ManajemenLokasi()
    {
        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();

        return view('manajemen_lokasi')->with('lokasi', $lokasi);
    }

    public function PostTambahLokasi(Request $request)
    {
        $nama_lokasi = $request -> nama_lokasi;

        DB::table('lokasi')->insert([
            'nama_lokasi' => $nama_lokasi,
        ]);

        return redirect('./lokasi');
    }

    public function HapusLokasi(Request $request)
    {
        $id_lokasi = $request -> id_lokasi;

        DB::table('lokasi')->where('id_lokasi', $id_lokasi)->delete();
        
        return redirect('./lokasi');
    }

    public function ManajemenPengumuman()
    {
        $pengumuman = DB::table('pengumuman')->orderBy('id_pengumuman', 'desc')->get();

        return view('manajemen_pengumuman')->with('pengumuman', $pengumuman);
    }

    public function ManajemenPengumumanCari(Request $request)
    {
		$cari = $request->cari;
        
        $pengumuman = DB::table('pengumuman')->where('judul_pengumuman','like',"%".$cari."%")->orderBy('id_pengumuman', 'desc')->get();

        return view('manajemen_pengumuman')->with('pengumuman', $pengumuman);
    }

    public function PostTambahPengumuman(Request $request)
    {
        $judul_pengumuman = $request -> judul_pengumuman;
        $keterangan_singkat = $request -> keterangan_singkat;
        $foto_pengumuman = $request -> file('foto_pengumuman');
        $foto_kosong = $request -> foto_kosong;
        $isi_pengumuman = $request -> isi_pengumuman;

        if(empty($foto_pengumuman)){
            $nama_foto = $foto_kosong;
        }

        else{
            $nama_foto = time().'_'.$foto_pengumuman->getClientOriginalName();
            $tujuan_upload = './asset/u_file/foto_pengumuman';
            $foto_pengumuman->move($tujuan_upload,$nama_foto);
        }

        DB::table('pengumuman')->insert([
            'judul_pengumuman' => $judul_pengumuman,
            'keterangan_singkat' => $keterangan_singkat,
            'foto_pengumuman' => $nama_foto,
            'isi_pengumuman' => $isi_pengumuman,
        ]);

        return redirect('./manajemen_pengumuman');
    }

    public function DetailPengumuman($id_pengumuman)
    {
        $pengumuman = DB::table('pengumuman')->where('id_pengumuman', $id_pengumuman)->get();

        return view('detail_pengumuman')->with('pengumuman', $pengumuman);
    }

    public function PostEditPengumuman(Request $request){
        $id_pengumuman = $request -> id_pengumuman;
        $judul_pengumuman = $request -> judul_pengumuman;
        $keterangan_singkat = $request -> keterangan_singkat;
        $foto_pengumuman = $request -> file('foto_pengumuman');
        $foto_pengumuman_lama = $request -> foto_pengumuman_lama;
        $isi_pengumuman = $request -> isi_pengumuman;

        if(empty($foto_pengumuman)){
            $nama_foto = $foto_pengumuman_lama;
        }

        else{
            $nama_foto = time().'_'.$foto_pengumuman->getClientOriginalName();
            $tujuan_upload = './asset/u_file/foto_pengumuman';
            $foto_pengumuman->move($tujuan_upload,$nama_foto);
        }

        if(empty($kode_link_video)){
            $kode_link_video = "-";
        }

        DB::table('pengumuman')->where('id_pengumuman', $id_pengumuman)->update([
            'judul_pengumuman' => $judul_pengumuman,
            'keterangan_singkat' => $keterangan_singkat,
            'foto_pengumuman' => $nama_foto,
            'isi_pengumuman' => $isi_pengumuman,
        ]);

        return redirect('./manajemen_pengumuman');
    }


    public function HapusPengumuman(Request $request)
    {
        $id_pengumuman = $request -> id_pengumuman;

        DB::table('pengumuman')->where('id_pengumuman', $id_pengumuman)->delete();
        
        return redirect('./manajemen_pengumuman');
    }

    public function Pengumuman()
    {
        $pengumuman = DB::table('pengumuman')->orderBy('id_pengumuman', 'desc')->get();

        return view('pengumuman')->with('pengumuman', $pengumuman);
    }

    public function PengumumanCari(Request $request)
    {
		$cari = $request->cari;
        
        $pengumuman = DB::table('pengumuman')->where('judul_pengumuman','like',"%".$cari."%")->orderBy('id_pengumuman', 'desc')->get();

        return view('pengumuman')->with('pengumuman', $pengumuman);
    }

    public function LihatPengumuman($id_pengumuman)
    {
        $pengumuman = DB::table('pengumuman')->where('id_pengumuman', $id_pengumuman)->get();

        return view('lihat_pengumuman')->with('pengumuman', $pengumuman);
    }

}