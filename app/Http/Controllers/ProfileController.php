<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Storage;
// use App\Http\Controllers\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('/admin/profile.index',compact('user'));
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
    // public function store(Request $request, User $user)
    // {
    //     $user = User::find(Auth::user()->id);

    //     if($user)
    //     {
    //         if (Auth::user()->username === $request['username']){
    //             $validate = $request->validate([
    //                 'name' => 'nullable|min:2',
    //                 'username' => 'nullable',
    //                 'current_password' =>['nullable'],
    //                 'password' => ['nullable','min:8','confirmed']
    //             ]);  
    //         }
    //     if($request->hasFile('gambar')){
    //         $filename = $request->gambar->getClientOriginalName();
    //         $request->gambar->storeAs('gambars',$filename,'public');
    //         Auth()->user()->update(['gambar'=>$filename]);
    //     }
    //     if (Hash::check($request->current_password,auth()->user()->password)){
    //         auth()->user()->update(['password' => Hash::make($request->password)]);
    //         return back()->with('message','Password Kamu berhasil di ganti');
    //         }
    //         throw ValidationException::withMessages([
    //             'current_password' => 'Password yang anda masukan salah',
    //          ]); 
    //     $user->name = $request['name'];
    //     $user->username = $request['username'];
    //     $user->password = $request['password'];
    //     $user->save();
    //     return redirect('/admin/profile');
    //     }
    // }

    


