<?php

namespace App\Imports;

use App\Models\Newsletter;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

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
            'tanggal' => is_numeric($row[3]) ? ExcelDate::excelToDateTimeObject($row[3]) : null,
            'nama_berita' => $row[4],
            'jabatan_berita' => $row[5],
            'alamat_berita' => $row[6],
            'dugaan_ppatk' => $row[7],
            'dugaan_uu' => $row[8],
            'keterangan' => $row[9],
        ]);
    }
}