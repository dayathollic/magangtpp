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

class ChangePasswordAdminController extends Controller
{
    public function index()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('/admin/changepassword.index',compact('user'));
    }

    public function update(Request $request)
    {
        // $user = User::find(Auth::user()->id);

        // if($user)
        // {
            // if (Auth::user()->username === $request['username']){
                $request->validate([
                    'current_password' =>['required'],
                    'password' => ['required','min:8','confirmed']
                ]);  
            // }
        if (Hash::check($request->current_password,auth()->user()->password)){
            auth()->user()->update(['password' => Hash::make($request->password)]);
            $request->session()->flash('success','Profile Berhasil di Update');
            return back()->with('message','Password Kamu berhasil di ganti');
            }
            throw ValidationException::withMessages([
                'current_password' => 'Password yang anda masukan salah',
             ]); 
        // $user->password = $request['password'];
        // $user->save();
        // User::where('id', $user)->update($data);
        
        // return redirect('/user/changepassword');
        }

        public function store(Request $request)
        {
            $request->validate([
                'current_password' =>['required'],
                'password' => ['required','min:8','confirmed']
            ]);  
        // }
    if (Hash::check($request->current_password,auth()->user()->password)){
        auth()->user()->update(['password' => Hash::make($request->password)]);
        $request->session()->flash('success','Profile Berhasil di Update');
        return back()->with('message','Password Kamu berhasil di ganti');
        }
        throw ValidationException::withMessages([
            'current_password' => 'Password yang anda masukan salah',
         ]); 
        }

}
