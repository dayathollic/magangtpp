<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenLelang extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode'                      ,
        'nama_paket_pekerjaan'  ,
        'rak_dokumen'      ,
        'data_perusahaan'                     ,
        'pengalaman_perusahaan'               ,
        'uraian_pengalaman_perusahaan'        ,
        'ustek'       ,
        'metodologi_dan_program_kerja'            ,
        'jadwal_pekerjaan'             ,
        'tenaga_ahli'   ,
        'komposisi_penugasan' ,
        'jadwal_penugasan_ta',
        'rab_penawaran',
    ];
}
