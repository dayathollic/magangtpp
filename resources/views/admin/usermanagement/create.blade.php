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
            <a href="/admin/usermanagement" class="nav-link text-white">User</a>
        </li>
    </ul>

    <!-- Right navbar links -->
</nav>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <h4 class="mb-3">
                            <u>Tambah Data</u>
                        </h4>

                        <form action="{{ route('usermanagement.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">ROLE</label><br>
                                <select class="form-select fw-weight-bold text-bold text-center" id="role" name="role" value="{{ old('role') }}" aria-label="Floating label select example">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                {{-- <select id="role" name="role" class="from-control d-inline d-flex text-center @error('role') is-invalid @enderror" 
                                style="width: 1210px; height:50px" value="{{ old('role') }}">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                  </select> --}}
                                {{-- <input type="enum" class="form-control @error('role') is-invalid @enderror" name="role"
                                    value="{{ old('role') }}"> --}}

                                <!-- error message untuk title -->
                                @error('role')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}">

                                <!-- error message untuk title -->
                                @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">USERNAME</label>
                                <input type="text"
                                    class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}">

                                <!-- error message untuk title -->
                                @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <label class="font-weight-bold">PASSWORD</label>
                            <div class="mb-4 input-group">
                                <div class="input-group">
                                <input type="password" id="password" name="password" placeholder="Password"
                                    class="form-control form-control-lg" required/>
                                        <span class="input-group-text" id="togglePassword">
                                            <img src="https://img.icons8.com/office/16/null/invisible.png"  class="bi-eye"/>
                                      </span>
                                    </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="font-weight-bold">PASSWORD</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password') }}"> --}}

                                <!-- error message untuk title -->
                                {{-- @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div> --}}
                                {{-- @enderror --}}
                            </div>

                    </div>
                    <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Simpan
                    </button>
                    </form>
                </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- /.content -->
    <!-- ./wrapper -->
    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
  
        const password = document.querySelector('#password');
  
        togglePassword.addEventListener('click', () => {
  
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                  
            password.setAttribute('type', type);
  
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>
    <script>
        CKEDITOR.replace('content');
    </script>
     @stop
     @stop