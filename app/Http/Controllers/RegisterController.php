<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'password' => 'required|min:8|max:255',

        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success','Registrasi berhasil');
        return redirect('/login');
    }



}
