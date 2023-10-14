<?php

namespace App\Imports;

use App\Models\Dttot;
use Maatwebsite\Excel\Concerns\ToModel;

class DttotImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Dttot([
            'id' => $row[0],
            'nama' => $row[1],
            'deskripsi' => $row[2],
            'terduga' => $row[3],
            'kode_densus' => $row[4],
            'tempat_lahir' => $row[5],
            'tgl_lahir' => $row[6],
            'wn' => $row[7],
            'alamat' => $row[8],

        ]);
    }
}