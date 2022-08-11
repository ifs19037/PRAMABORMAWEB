<?php

namespace App\View\Components;

use App\Models\DataKaryawan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class DataKaryawanExportExcel implements FromView
{
    public function __construct($nama_karyawan, $nik_karyawan, $jenis_kelamin, $jabatan, $divisi, $lokasi, $tanggal_lahir, $tanggal_masuk, $email, $no_telepon, $alamat_ktp)
    {
        $this->nama_karyawan = $nama_karyawan;
        $this->nik_karyawan = $nik_karyawan;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->jabatan = $jabatan;
        $this->divisi = $divisi;
        $this->lokasi = $lokasi;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->tanggal_masuk = $tanggal_masuk;
        $this->email = $email;
        $this->no_telepon = $no_telepon;
        $this->alamat_ktp = $alamat_ktp;
    }

    public function view(): View
    {   
        return view('data_karyawan_export_excel', [
            'DataKaryawanExportExcel' => DataKaryawan::where('nama_karyawan','like', '%'.$this->nama_karyawan.'%')->where('nik_karyawan', 'like', '%'.$this->nik_karyawan.'%')
            ->where('jenis_kelamin','like', '%'.$this->jenis_kelamin.'%')->where('jabatan', 'like', '%'.$this->jabatan.'%')
            ->where('divisi','like', '%'.$this->divisi.'%')->where('lokasi', 'like', '%'.$this->lokasi.'%')
            ->where('tanggal_lahir','like', '%'.$this->tanggal_lahir.'%')->where('tanggal_masuk', 'like', '%'.$this->tanggal_masuk.'%')
            ->where('email','like', '%'.$this->email.'%')->where('no_telepon', 'like', '%'.$this->no_telepon.'%')->where('alamat_ktp', 'like', '%'.$this->alamat_ktp.'%')->get()
        ]);        
    }
}