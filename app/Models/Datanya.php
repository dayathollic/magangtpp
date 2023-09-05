<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datanya extends Model
{
    use HasFactory;
    protected $fillable = [
        'no'                      ,
        'nama_paket_pekerjaan'  ,
        'sumber_data'      ,
        'data_sekunder'                     ,
        'data_primer'               ,
        'pengolahan_data'        ,
        'daftar_pertanyaan'       ,
        'kriteria_responden'            ,
        'hasil_survey'             ,
    ];
}
