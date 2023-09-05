@extends('layout.main')
@section('content')
@section('sidebar')
@parent
{{-- <div class="mb-md-4 mt-md-4">
  @if(session()->has('success'))
  <div class="alert alert-primary text-center alert-dismissible fade show" role="alert">
      {{ session('success') }}
  </div>
  @endif --}}

<div class="content-wrapper">
    <section class="content-header">
        <div class="card shadow">
          
            <div class="card-body">
                <span class="text-bold" style="font-size:25px">Change Password</span>
            </div>
                    <div class="col-5 p-4">
                        <form action="{{ url('/admin/changepassword') }}" method="POST"  enctype="multipart/form-data">
                            {{-- {{ method_field('put') }}  --}}
                            @csrf
                          <div>
                            <label for="current_password" class="form-label mt-2">Password Lama</label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            @error ('current_password')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div>
                            <label for="password" class="form-label mt-2">Password Baru</label>
                            <input type="password" class="form-control mb-2" id="password" name="password">
                            @error('password')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div>
                            <label for="password_confirmation" class="form-label mt-2">Konfirmasi Password</label>
                            <input type="password" class="form-control mb-2" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                          </div>
                    </div>
                </div>  
            </form>
            </div>
        
</section>

@endsection