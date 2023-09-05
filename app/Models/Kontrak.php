<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode'                      ,
        'nama_paket_pekerjaan'      ,
        'tahun'                     ,
        'rak_dokumen'               ,
        'spk'        ,
        'spmk'       ,
        'bast'            ,
        'pajak1'             ,
        'pajak2'              ,
        'pajak3'           ,
        'referensi_perusahaan'       ,
        'referensi_ta'            ,
    ];
}
