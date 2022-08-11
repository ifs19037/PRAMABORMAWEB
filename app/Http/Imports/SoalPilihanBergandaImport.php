<?php

namespace App\Http\Imports;

use Session;

use App\Models\SoalPilihanBerganda;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;

class SoalPilihanBergandaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row['soal_pilihan_berganda'])){
                return NULL;
        }

        $id_kuis = Session::get('id_kuis');

        return new SoalPilihanBerganda([
            'soal_pilihan_berganda' => $row['soal_pilihan_berganda'],
            'pilihan_a' => $row['pilihan_a'],
            'pilihan_b' => $row['pilihan_b'],
            'pilihan_c' => $row['pilihan_c'],
            'pilihan_d' => $row['pilihan_d'],
            'pilihan_e' => $row['pilihan_e'],
            'jawaban_soal_pilihan_berganda' => $row['jawaban_soal_pilihan_berganda'],
            'id_kuis' => $id_kuis,
        ]);

        Session::forget('id_kuis');
    }
}
