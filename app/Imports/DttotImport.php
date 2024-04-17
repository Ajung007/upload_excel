<?php

namespace App\Imports;

use App\Models\Dttot;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DttotImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Dttot([
            'id' => $row['id'],
            'nama' => $row['nama'],
            'deskripsi' => $row['deskripsi'],
            'terduga' => $row['terduga'],
            'kode_densus' => $row['kode_densus'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tgl_lahir' => $row['tgl_lahir'],
            'wn' => $row['wn'],
            'alamat' => $row['alamat'],
        ]);
    }
}