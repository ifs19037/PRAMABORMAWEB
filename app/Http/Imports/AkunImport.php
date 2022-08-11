<?php

namespace App\Http\Imports;
// use Carbon\Carbon;

use App\Models\Akun;
use Maatwebsite\Excel\Concerns\ToModel;

// use Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;

use DB;


class AkunImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row['nip'])){
                return NULL;
        }

        // $nik_akun = DB::table('akun')->select('nik_akun')->where('level','2')->get();

        // if(!isset($row['nik'])!=$nik_akun){
           
        // }

        return new Akun([
            'nik_akun' => $row['nip'],
            'password' => $row['nip'], 
            'nik_karyawan' => $row['nip'], 
            'level' => 2,
        ]);
    }
}
