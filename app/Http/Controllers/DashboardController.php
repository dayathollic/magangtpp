<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    public function index()
{

        $data = DB::table('users','role','user')->count();
        return view('/admin/dashboard.index',compact('data'));
    }

    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

}
