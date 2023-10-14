<?php

namespace App\Imports;

use App\Models\Sipendar;
use Maatwebsite\Excel\Concerns\ToModel;

class SipendarImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sipendar([
            'id' => $row[0],
            'nama' => $row[1],
            'parameter_pencarian' => $row[2],
            'tempat_lahir' => $row[3],
            'tanggal_lahir' => $row[4],
            'npwp' => $row[5],
            'ktp' => $row[6],
            'pas' => $row[7],
            'kitas' => $row[8],
            'suket' => $row[9],
            'sim' => $row[10],
            'kitap' => $row[11],
            'kims' => $row[12],
            'identitas_lain' => $row[12],
        ]);
    }
}