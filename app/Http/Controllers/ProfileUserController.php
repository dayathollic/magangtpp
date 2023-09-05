<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfileUserController extends Controller
{

    public function index()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('/user/profile.index',compact('user'));
    }

    public function update(Request $request)

    {
        $rules = [
            'name' => 'nullable',
            'username' => 'nullable',
            'gambar' =>'nullable|mimes:pdf,jpeg,png,svg,jpg,bmp,raw,gif',
        ];

        $validateDate =$request->validate($rules);

        if ($request->file('gambar')){
            if ($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $validateDate['gambar'] = $request->file('gambar')->store('/gambars');
        }
        User::where('id',Auth::user()->id)->update($validateDate);
        $request->session()->flash('success','Profile Berhasil di Update');
        return redirect()->back();
    }
}
