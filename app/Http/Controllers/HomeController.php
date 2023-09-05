<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // dd($laporan->all);
        $keyword = $request->keyword;
        $laporans = Laporan::where('nama_paket_pekerjaan','LIKE','%'.$keyword.'%')
        ->orwhere('tahun','LIKE','%'.$keyword.'%')
        ->simplepaginate(6);
        return view('/home.dashboard',compact('laporans','keyword'));
        
        /**
         * The roles that belong to the HomeController
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        
        // $laporans = Laporan::simplepaginate(20);
        // return view('/home.dashboard',compact('laporans'));
    }
    public function roles(): BelongsToMany
        {
            return $this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');
        }
}
