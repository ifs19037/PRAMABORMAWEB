<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\DataKaryawan;
 
use Maatwebsite\Excel\Facades\Excel;

use App\View\Components\DataKaryawanExportExcel;

use App\Http\Imports\DataKaryawanImport;

use DB;

class KaryawanController extends Controller
{
    public function ManajemenData()
    {
        $data_karyawan = DB::table('data_karyawan')->orderBy('nama_karyawan', 'asc')->get();

        return view('manajemen_data', ['data_karyawan' => $data_karyawan]);
    }

    public function TambahData()
    {
        $jabatan = DB::table('jabatan')->orderBy('nama_jabatan', 'asc')->get();
        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();
        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();

        return view('tambah_data')->with('jabatan', $jabatan)->with('divisi', $divisi)->with('lokasi', $lokasi);
    }

    public function PostTambahDataKaryawan(Request $request)
    {
        $nama_karyawan = $request -> nama_karyawan;
        $nik_karyawan = $request -> nik_karyawan;
        $jenis_kelamin = $request -> jenis_kelamin;
        $jabatan = $request -> jabatan;
        $divisi = $request -> divisi;
        $lokasi = $request -> lokasi;
        $tanggal_lahir = $request -> tanggal_lahir;
        $tanggal_masuk = $request -> tanggal_masuk;
        $email = $request -> email;
        $no_telepon = $request -> no_telepon;
        $alamat_ktp = $request -> alamat_ktp;

        DB::table('data_karyawan')->insert([
            'nama_karyawan' => $nama_karyawan,
            'nik_karyawan' => $nik_karyawan,
            'jenis_kelamin' => $jenis_kelamin,
            'jabatan' => $jabatan,
            'divisi' => $divisi,
            'lokasi' => $lokasi,
            'tanggal_lahir' => $tanggal_lahir,
            'tanggal_masuk' => $tanggal_masuk,
            'email' => $email,
            'no_telepon' => $no_telepon,
            'alamat_ktp' => $alamat_ktp,
            'foto_karyawan' => "user.png",
        ]);

        return redirect('./manajemen_data');
    }

    public function DataKaryawanExportExcel(Request $request) 
    {
        return Excel::download(new DataKaryawanExportExcel($request->nama_karyawan, $request->nik_karyawan, $request->jenis_kelamin, $request->jabatan
        , $request->divisi, $request->lokasi, $request->tanggal_lahir, $request->tanggal_masuk, $request->email, $request->no_telepon, $request->alamat_ktp)
        , 'Data Karyawan.xlsx');
    }

    public function DataKaryawanImportExcel(Request $request) 
	{ 
		Excel::import(new DataKaryawanImport, $request->file('file_excel_data_karyawan'), null, \Maatwebsite\Excel\Excel::XLSX);

		return redirect('./manajemen_data');
	}

    public function DetailDataKaryawan($nik_karyawan)
    {
        $data_karyawan = DB::table('data_karyawan')->where('nik_karyawan', $nik_karyawan)->get();
        $jabatan = DB::table('jabatan')->orderBy('nama_jabatan', 'asc')->get();
        $divisi = DB::table('divisi')->orderBy('nama_divisi', 'asc')->get();
        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();
        
        return view('detail_karyawan')->with('data_karyawan', $data_karyawan)->with('jabatan', $jabatan)->with('divisi', $divisi)->with('lokasi', $lokasi);
    }

    public function PostEditDataKaryawan(Request $request){
        $nama_karyawan = $request -> nama_karyawan;
        $nik_karyawan = $request -> nik_karyawan;
        $jenis_kelamin = $request -> jenis_kelamin;
        $jabatan = $request -> jabatan;
        $divisi = $request -> divisi;
        $lokasi = $request -> lokasi;
        $tanggal_lahir = $request -> tanggal_lahir;
        $tanggal_masuk = $request -> tanggal_masuk;
        $email = $request -> email;
        $no_telepon = $request -> no_telepon;
        $alamat_ktp = $request -> alamat_ktp;

        DB::table('data_karyawan')->where('nik_karyawan', $nik_karyawan)->update([
            'nama_karyawan' => $nama_karyawan,
            'nik_karyawan' => $nik_karyawan,
            'jenis_kelamin' => $jenis_kelamin,
            'jabatan' => $jabatan,
            'divisi' => $divisi,
            'lokasi' => $lokasi,
            'tanggal_lahir' => $tanggal_lahir,
            'tanggal_masuk' => $tanggal_masuk,
            'email' => $email,
            'no_telepon' => $no_telepon,
            'alamat_ktp' => $alamat_ktp,
        ]);

        return redirect('./manajemen_data');
    }

    public function HapusDataKaryawan(Request $request)
    {
        $nik_karyawan = $request -> nik_karyawan;

        DB::table('akun')->where('nik_karyawan', $nik_karyawan)->delete();
        DB::table('data_karyawan')->where('nik_karyawan', $nik_karyawan)->delete();
        
        return redirect('./manajemen_data');
    }

    public function CheckHapusDataKaryawan(Request $request)
    {        
        if(isset($_POST['checkDelete']))
        {
            $nik_karyawan = $_POST['checkDelete'];

            foreach ((array)$nik_karyawan as $nik) {
                DB::table('akun')->where('nik_karyawan', $nik)->delete();
                DB::table('data_karyawan')->where('nik_karyawan', $nik)->delete();
            }
            
            return redirect('./manajemen_data');
        }

        return redirect('./manajemen_data');
    }

    public function UlangTahunBulanIni()
    {
        date_default_timezone_set('Asia/Jakarta');


        // $ulang_tahun_bulan_ini = DB::table('data_karyawan')->where((DB::raw('month(tanggal_lahir)')), date('m'))->get();
        


        // $ulang_tahun_bulan_ini = DB::table('data_karyawan')->where((DB::raw('month(tanggal_lahir)')), date('m'))->get();


        $ulang_tahun_bulan_ini = DB::table('data_karyawan')->where((DB::raw('EXTRACT(MONTH FROM tanggal_lahir)')), date('m'))->get();

        return view('ulang_tahun_bulan_ini')->with('ulang_tahun_bulan_ini', $ulang_tahun_bulan_ini);
    }

    public function UlangTahunBulanIniCari(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $lokasi = DB::table('lokasi')->orderBy('nama_lokasi', 'asc')->get();

        $cari_nama_lokasi = $request->cari_nama_lokasi;

        $cari_nama = $request->cari_nama;
        

        // $ulang_tahun_bulan_ini = DB::table('data_karyawan')->where((DB::raw('month(tanggal_lahir)')), date('m'))
        // ->where('nama_karyawan','like',"%".$cari_nama."%")->where('lokasi','like',"%".$cari_nama_lokasi."%")->get();



        // $ulang_tahun_bulan_ini = DB::table('data_karyawan')->where((DB::raw('month(tanggal_lahir)')), date('m'))
        // ->where('nama_karyawan','like',"%".$cari_nama."%")->where('lokasi','like',"%".$cari_nama_lokasi."%")->get();



        $ulang_tahun_bulan_ini = DB::table('data_karyawan')->where((DB::raw('EXTRACT(MONTH FROM tanggal_lahir)')), date('m'))
        ->where('nama_karyawan','like',"%".$cari_nama."%")->where('lokasi','like',"%".$cari_nama_lokasi."%")->get();

        $bulan_depan = date('m', strtotime('next month'));
        
        if($bulan_depan > 12){
            $bulan_depan = 1;
        }

        
        // $ulang_tahun_bulan_depan = DB::table('data_karyawan')->where((DB::raw('month(tanggal_lahir)')), $bulan_depan)
        // ->where('nama_karyawan','like',"%".$cari_nama."%")->where('lokasi','like',"%".$cari_nama_lokasi."%")->get();
        



        // $ulang_tahun_bulan_depan = DB::table('data_karyawan')->where((DB::raw('month(tanggal_lahir)')), $bulan_depan)
        // ->where('nama_karyawan','like',"%".$cari_nama."%")->where('lokasi','like',"%".$cari_nama_lokasi."%")->get();

        $ulang_tahun_bulan_depan = DB::table('data_karyawan')->where((DB::raw('EXTRACT(MONTH FROM tanggal_lahir)')), $bulan_depan)
        ->where('nama_karyawan','like',"%".$cari_nama."%")->where('lokasi','like',"%".$cari_nama_lokasi."%")->get();

        $jumlah_ulang_tahun_bulan_ini = count($ulang_tahun_bulan_ini);

        $jumlah_ulang_tahun_bulan_depan = count($ulang_tahun_bulan_depan);

        return view('ulang_tahun_bulan_ini')->with('lokasi', $lokasi)->with('cari_nama_lokasi', $cari_nama_lokasi)
        ->with('ulang_tahun_bulan_ini', $ulang_tahun_bulan_ini)->with('ulang_tahun_bulan_depan', $ulang_tahun_bulan_depan)
        ->with('jumlah_ulang_tahun_bulan_ini', $jumlah_ulang_tahun_bulan_ini)->with('jumlah_ulang_tahun_bulan_depan', $jumlah_ulang_tahun_bulan_depan);
    }
}