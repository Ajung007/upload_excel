<?php

namespace App\Imports;

use App\Models\Dppspm;
use Maatwebsite\Excel\Concerns\ToModel;

class DppspmImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Dppspm([
            'id' => $row[0],
            'referensi' => $row[1],
            'nama' => $row[2],
            'gelar' => $row[3],
            'pekerjaan' => $row[4],
            'tanggal_lahir' => $row[5],
            'tempat_lahir' => $row[6],
            'alias_1' => $row[7],
            'alias_2' => $row[8],
            'alias_3' => $row[9],
            'alias_4' => $row[10],
            'alias_5' => $row[11],
            'kewarganegaraan' => $row[12],
            'no_paspor' => $row[13],
            'no_identitas' => $row[14],
            'informasi' => $row[15],
        ]);
    }
}