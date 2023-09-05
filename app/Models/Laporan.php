<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode'                      ,
        'sampul'                    ,
        'abstrak'                   ,
        'nama_paket_pekerjaan'      ,
        'tahun'                     ,
        'instansi_pekerjaan'        ,
        'rak_dokumen'               ,
        'laporan_pendahuluan'       ,
        'laporan_antara'            ,
        'laporan_akhir'             ,
        'policy_brief'              ,
        'naskah_akademik'           ,
        'rancangan_peraturan'       ,
        'produk_lainnya'            ,
    ];
}
