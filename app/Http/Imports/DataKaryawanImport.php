<?php

namespace App\Http\Imports;
// use Carbon\Carbon;

use App\Models\DataKaryawan;
use Maatwebsite\Excel\Concerns\ToModel;

// use Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;


class DataKaryawanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row['nama_karyawan'])){
            return NULL;
        }
    
        return new DataKaryawan([
            'nama_karyawan' => $row['nama_karyawan'],
            'nik_karyawan' => $row['nip'], 
            'jenis_kelamin' => $row['jenis_kelamin'], 
            'jabatan' => $row['jabatan'],
            'divisi' => $row['divisi'], 
            'lokasi' => $row['lokasi'], 
            'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir']),
            'tanggal_masuk' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_masuk']), 
            'email' => $row['email'], 
            'no_telepon' => $row['no_telepon'], 
            'alamat_ktp' => $row['alamat_ktp'], 
            'foto_karyawan' => "user.png", 
        ]);
    }
}
