@extends('layout.main')
@section('content')
@section('sidebar')
@parent
<nav class="main-header navbar navbar-expand navbar-blue shadow-sm navbar-light" style="background-color: #2B2B78">
    <!-- Left navbar links -->
    <ul class="navbar-nav font-weight-bold ">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/dashboard" class="nav-link text-white">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/dashboard" class="nav-link text-white">Dashboard</a>
        </li>
    </ul>
    <!-- Right navbar links -->
</nav>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="mb-md-4 mt-md-4">
            @if(session()->has('success'))
            <div class="alert text-white text-center alert-dismissible fade show" role="alert" style="background-color: #2B2B78">
                {{ session('success') }}
            </div>
            @endif
        <div class="card shadow">
            <div class="card-body">
                <span class="text-bold" style="font-size:25px">Detail Profil</span>
            </div><br>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-4 text-center">
                        @if(Auth::user()->gambar)
                        <img src="{{asset('storage/'.Auth::user()->gambar)}}"  width="" alt="" class="image rounded-circle position-absolute top-20 start-50 translate-middle" style="width: 80px;height: 80px; margin: 0px; "><br>
                        @else
                        <img src="https://i.ibb.co/wwcpxL0/user.png"  width="" alt="" class="image rounded-circle position-absolute top-20 start-50 translate-middle" style="width: 80px;height: 80px; margin: 0px; "><br>
                        @endif
                        <div>
                            <p class="text-center text-bold mt-5" style="font-size: 20px">{{ old('name',Auth::user()->name) }}</p>
                 
                            <p class="text-center" style="font-size: 20px">{{ old('username',Auth::user()->username) }}</p>                        
                        </div>
                    </div>
                    <div class="col-1" style="border-left: 2px solid grey; height: 300px;"></div>
                    <div class="col-5 p-4">
                        {{-- <form action="{{ url('/admin/profile') }}" method="POST"> --}}
                            {{-- @csrf --}}
                            <form action="{{ route('profile.update',$user) }}" method="POST"  enctype="multipart/form-data">
                                {{ method_field('put') }} 
                                @csrf
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" name="name" value="{{ old('name',Auth::user()->name) }}">
                          </div>
                          <div>
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="username" class="form-control" id="username" name="username" value="{{ old('username',Auth::user()->username) }}">
                          </div>
                          <div>
                            <label for="gambar" class="form-label">Foto Profil</label>
                            <input type="hidden" name="oldGambar" value="{{ $user->gambar }}">
                            <input class="form-control" type="file" name="gambar" id="gambar"  value="{{ old('email',Auth::user()->gambar) }}">
                          </div><br>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                          </div><br>
                          <div class="d-grid gap-4 d-md-flex justify-content-md-end">
                            <a href="/admin/changepassword"><button class="btn btn-danger me-md-2" type="button">Change Password</button></a>
                          </div>
                        </div> 
                </div>  
            </div>
        </div>
    </form>
</div>
</section>
@stop
    @stop
