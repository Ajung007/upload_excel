<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sipendar extends Model
{
    use HasFactory;

    protected $table = 'sipendar';

    protected $fillable = ['id', 'nama', 'parameter_pencarian', 'tempat_lahir', 'tanggal_lahir', 'npwp', 'ktp', 'pas', 'kitas', 'suket', 'kitap', 'kims', 'identitas_lain'];

}