<?php

namespace App\Imports;

use App\Models\Newsletter;
use Maatwebsite\Excel\Concerns\ToModel;

class NewsletterImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Newsletter([
            'id' => $row[0],
            'sumber' => $row[1],
            'hari' => $row[2],
            'tanggal' => $row[3],
            'nama_berita' => $row[4],
            'jabatan_berita' => $row[5],
            'alamat_berita' => $row[6],
            'dugaan_ppatk' => $row[7],
            'dugaan_uu' => $row[8],
            'keterangan' => $row[9],
        ]);
    }
}