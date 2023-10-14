<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dttot extends Model
{
    use HasFactory;

    protected $table = "dttots";

    protected $fillable = ['id', 'nama', 'deskripsi', 'terduga', 'kode_densus', 'tempat_lahir', 'tgl_lahir', 'wn', 'alamat'];

}