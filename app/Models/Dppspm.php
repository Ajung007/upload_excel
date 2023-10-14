<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dppspm extends Model
{
    use HasFactory;

    protected $table = 'dppspm';

    protected $fillable = [
        'id',
        'referensi',
        'nama',
        'gelar',
        'pekerjaan',
        'tanggal_lahir',
        'tempat_lahir',
        'alias_1',
        'alias_2',
        'alias_3',
        'alias_4',
        'alias_5',
        'kewarganegaraan',
        'no_paspor',
        'no_identitas',
        'alamat',
        'informasi'
    ];
}