<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;

class SOPController extends Controller
{
    public function ManajemenSOP()
    {
        $sop = DB::table('sop')->orderBy('id_sop', 'desc')->orderBy('id_sop', 'desc')->get();
        
        return view('manajemen_sop')->with('sop', $sop);
    }

    public function ManajemenSOPCari(Request $request)
    {
		$cari = $request->cari;
        
        $sop = DB::table('sop')->where('judul_sop','like',"%".$cari."%")->orderBy('id_sop', 'desc')->get();

        return view('manajemen_sop')->with('sop', $sop);
    }

    // public function cari(Request $request)
	// {
	// 	$cari = $request->cari;

	// 	$pengumuman = DB::table('pengumuman')->where('kategori_pengumuman','like',"%".$cari."%")
    //     ->orwhere('judul_pengumuman','like',"%".$cari."%")->orwhere('isi_pengumuman','like',"%".$cari."%")
    //     ->orwhere('tanggal','like',"%".$cari."%")
    //     ->orderBy('id', 'desc')->get();
 
	// 	return view('./daftar_pengumuman',['pengumuman' => $pengumuman]);
	// }

    public function PostTambahSOP(Request $request)
    {
        $judul_sop = $request -> judul_sop;
        $keterangan_singkat = $request -> keterangan_singkat;
        $foto_sop = $request -> file('foto_sop');
        $foto_kosong = $request -> foto_kosong;
        $file_sop = $request -> file('file_sop');
        
        if(empty($foto_sop)){
            $nama_foto = $foto_kosong;
        }

        else{
            $nama_foto = time().'_'.$foto_sop->getClientOriginalName();
            $tujuan_upload = './asset/u_file/foto_sop';
            $foto_sop->move($tujuan_upload,$nama_foto);
        }

        $nama_file = time().'_'.$file_sop->getClientOriginalName();
        $tujuan_upload = './asset/u_file/file_sop';
        $file_sop->move($tujuan_upload,$nama_file);

        DB::table('sop')->insert([
            'judul_sop' => $judul_sop,
            'keterangan_singkat' => $keterangan_singkat,
            'foto_sop' => $nama_foto,
            'file_sop' => $nama_file,
            'status' => "tampil",
        ]);

        return redirect('./manajemen_sop');
    }

    public function DetailSOP($id_sop)
    {
        $sop = DB::table('sop')->where('id_sop', $id_sop)->get();

        return view('detail_sop')->with('sop', $sop);
    }

    public function PostEditSOP(Request $request){
        $id_sop = $request -> id_sop;
        $judul_sop = $request -> judul_sop;
        $keterangan_singkat = $request -> keterangan_singkat;
        $foto_sop = $request -> file('foto_sop');
        $foto_sop_lama = $request -> foto_sop_lama;
        $status = $request -> status;

        if(empty($foto_sop)){
            $nama_foto = $foto_sop_lama;
        }

        else{
            $nama_foto = time().'_'.$foto_sop->getClientOriginalName();
            $tujuan_upload = './asset/u_file/foto_sop';
            $foto_sop->move($tujuan_upload,$nama_foto);
        }

        DB::table('sop')->where('id_sop', $id_sop)->update([
            'judul_sop' => $judul_sop,
            'keterangan_singkat' => $keterangan_singkat,
            'foto_sop' => $nama_foto,
            'status' => $status,
        ]);

        return redirect('./manajemen_sop');
    }


    public function HapusSOP(Request $request)
    {
        $id_sop = $request -> id_sop;

        DB::table('sop')->where('id_sop', $id_sop)->delete();
        
        return redirect('./manajemen_sop');
    }

    public function ReviewSOP($id_sop)
    {
        $sop = DB::table('sop')->where('id_sop', $id_sop)->get();

        $akses_sop = DB::table('akses_sop')->select('data_karyawan.nama_karyawan', 'data_karyawan.nik_karyawan', 'data_karyawan.lokasi', 'akses_sop.created_at', 'akses_sop.updated_at')
        ->where('id_sop', $id_sop)->join('data_karyawan', 'akses_sop.nik_akun', '=', 'data_karyawan.nik_karyawan')->orderBy('data_karyawan.nik_karyawan', 'asc')->get();

        return view('review_sop')->with('sop', $sop)->with('akses_sop', $akses_sop);
    }

    public function SOP()
    {
        $sop = DB::table('sop')->where('status', 'tampil')->orderBy('id_sop', 'desc')->get();

        return view('sop')->with('sop', $sop);
    }

    public function SOPCari(Request $request)
    {
		$cari = $request->cari;
        
        $sop = DB::table('sop')->where('status', 'tampil')->where('judul_sop','like',"%".$cari."%")->orderBy('id_sop', 'desc')->get();

        return view('sop')->with('sop', $sop);
    }

    public function LihatSOP($id_sop)
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $nik_akun = Session::get('nik_akun');

        $sop = DB::table('sop')->where('id_sop', $id_sop)->get();

        $akses_sop = DB::table('akses_sop')->where('nik_akun',$nik_akun)->where('id_sop',$id_sop)->first();

        if(!$akses_sop){
            DB::table('akses_sop')->insert([
                'nik_akun' => $nik_akun,
                'id_sop' => $id_sop,
            ]);
        }

        elseif($akses_sop){
            DB::table('akses_sop')->where('id_akses_sop', $akses_sop->id_akses_sop)->update([
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }

        



        return view('lihat_sop')->with('sop', $sop);
    }

}