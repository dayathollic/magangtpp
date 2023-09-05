<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Middleware\CekRol;
// use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    } 

    public function authenticate (Request $request)
    {
        // dd ($request);
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);
    if (Auth::attempt($credentials))
    {
        $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
    }else{
        return redirect()->intended('/login');
    }
        return back()->with('loginError','login gagal!');

    }



public function store(Request $request)
{
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
}


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
        
    }
}