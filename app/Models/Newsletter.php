<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = 'newsletter';
    protected $fillable = [
        'id',
        'sumber',
        'hari',
        'tanggal',
        'nama_berita',
        'jabatan_berita',
        'alamat_berita',
        'dugaan_ppatk',
        'dugaan_uu',
        'keterangan'
    ];
}