<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan'                      ,
        'presensi'      ,
        'notulensi'                     ,
        'foto_dan_video'               ,
    ];
}
