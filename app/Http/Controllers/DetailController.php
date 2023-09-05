<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DetailController extends Controller
{
    public function index($id){
        $laporan = Laporan::where('id',$id)->first();
        return view('/home/detail.index',compact('laporan'));
    }
}
 