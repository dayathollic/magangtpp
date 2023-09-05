<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode'                      ,
        'pcm'      ,
        'tahun'                     ,
        'fgd1'        ,
        'fgd2'               ,
        'fgd3'       ,
    ];
}
