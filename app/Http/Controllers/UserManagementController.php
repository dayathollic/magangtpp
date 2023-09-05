<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $usermanagements = User::where('role','LIKE','%'.$keyword.'%')
        ->orwhere('name','LIKE','%'.$keyword.'%')
        ->orwhere('username','LIKE','%'.$keyword.'%')
        ->simplepaginate(5);
        return view('/admin/usermanagement.index',compact('usermanagements','keyword'));
    }

    public function edit($id)
    {
        return view('/admin/usermanagement.edit',
        [
            'user'  => User::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'role' =>'nullable',
            // 'name' => 'required|max:255',
            // 'email' => 'required|email:dns',
        ]);

        $uprole = User::find($id);
        $uprole->role = $request->role;
        // $uprole->name = $request->name;
        // $uprole->email = $request->email;
        $uprole->save();
        return redirect('/admin/usermanagement');
    }



    public function create(){
        return view ('/admin/usermanagement.create');
    }
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'password' => 'required|min:8|max:255',
            'role'      => 'required'

        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success','Registrasi berhasil');
        
        return redirect('/admin/usermanagement');
    }

    public function destroy($id){

        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('usermanagement.index');
    }

}
