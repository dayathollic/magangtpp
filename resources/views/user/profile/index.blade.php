@extends('layout.home')
@section('content')

<div class="mb-md-4 mt-md-4">
  @if(session()->has('success'))
  <div class="alert alert-primary text-center alert-dismissible fade show" role="alert">
      {{ session('success') }}
  </div>
  @endif

<div class="content-wrapper">
    <section class="content-header">
        <div class="card shadow">
          
            <div class="card-body">
                <span class="text-bold" style="font-size:25px">Detail Profil</span>
            </div><br>
            <div class="container">
                <div class="row align-items-start ">
                  <div class="col-4 text-center">
                    @if(Auth::user()->gambar)
                    <img src="{{asset('storage/'.Auth::user()->gambar)}}"  width="" alt="" class="image rounded-circle position-absolute top-30 start-30 translate-middle mt-4" style="width: 80px;height: 80px; margin: 0px; "><br>
                    @else
                    <img src="https://i.ibb.co/wwcpxL0/user.png"  width="" alt="" class="image rounded-circle position-absolute top-30 start-30 translate-middle mt-4" style="width: 80px;height: 80px; margin: 0px; "><br>
                    @endif
                    <div>
                        <p class="text-center text-bold mt-5" style="font-size: 20px">{{ old('name',Auth::user()->name) }}</p>
             
                        <p class="text-center" style="font-size: 20px">{{ old('username',Auth::user()->username) }}</p>                        
                    </div>
                </div>
                    <div class="col-1" style="border-left: 2px solid grey; height: 300px;"></div>
                    <div class="col-5 p-4">
                        <form action="{{ url('profileuser') }}" method="POST"  enctype="multipart/form-data">
                            {{-- {{ method_field('put') }}  --}}
                            @csrf
                        <div>
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" name="name" value="{{ $user->name }}">
                          </div>
                          <div>
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                          </div>
                          <div>
                            <label for="gambar" class="form-label">Foto Profil</label>
                            <input type="hidden" name="oldGambar" value="{{ $user->gambar }}">
                            <input class="form-control" type="file" name="gambar" id="gambar">
                          </div><br>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                          </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        
                </div>  
            </div>
        </div>
</div>
</section>

@endsection