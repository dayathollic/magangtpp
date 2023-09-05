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
            <a href="/admin/usermanagement" class="nav-link text-white">User Management</a>
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
                            <u>Edit User</u>
                        </h4>


                         {{-- @forelse ($usermanagements as $usermanagement)
                         @csrf --}}
                         <form action="{{ route('usermanagement.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                             {{ method_field('put') }}
                            {{ csrf_field() }}
                         <div class="form-group">
                            <label class="font-weight-bold">Role</label><br>
                            <select class="form-select fw-weight-bold text-bold text-center" id="role" name="role" value="{{ old('role',$user->role) }}" aria-label="Floating label select example">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            @error('role')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name',$user->name) }}">

                            <!-- error message untuk title -->
                            @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                         </div>

                         <div class="form-group">
                            <label class="font-weight-bold">Username</label>
                            <input type="text"
                                class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username',$user->username) }}"> 

                            <!-- error message untuk title -->
                            @error('username')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            UPDATE
                        </button>
    
                        <!-- Modal -->
                        <div class="d-flex text-center">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document" style="height: 250px;width:300px">
                                                        <div class="modal-content" >
                                                            <div class="modal-body" >
                                                                {{-- <img src="https://ibb.co/r4YT14n" alt=""> --}}
                                                                <img src="https://i.ibb.co/jgmB1g7/image-42.png"
                                                                    class="text-center" alt="image-42" border="0">
                                                                <H1 class="fw-bold mb-1">Update Data</H1>
                                                                <p>Apakah Andah Yakin Akan Mengubah Data Ini?</p>
                                                                <button type="submit" class="btn btn-danger">Yakin</button>
                                                                <button type="button" class="btn btn-secondary ms-2"
                                                                    data-dismiss="modal">Batal</button>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                         </form>
                            

                        {{-- @forelse ($usermanagements as $usermanagement) --}}
                        {{-- <form action="{{ route('usermanagement.update', $usermanagent->id) }}" method="POST" enctype="multipart/form-data"> --}}
                            {{-- {{ method_field('put') }} --}}
                            {{-- {{ csrf_field() }} --}}
                            {{-- @csrf --}}

                            {{-- @method('put')
                            @csrf --}}
                           
                            {{-- <div class="form-group">
                                <label class="font-weight-bold">ROLE</label><br>
                                <select class="form-select fw-weight-bold text-bold text-center" id="role" name="role" value="{{ old('role') }}" aria-label="Floating label select example">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                @error('role')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name',$usermanagemnt->name) }}"> --}}

                                <!-- error message untuk title -->
                                {{-- @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            {{-- </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email',$usermanagemnt->email) }}"> --}}

                                <!-- error message untuk title -->
                                {{-- @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}
                            

                    {{-- </div> --}}
                    <!-- Button trigger modal -->
                   
                    {{-- </form> --}}
                </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    </div>
    <!-- ./wrapper -->
    <script>
        CKEDITOR.replace('content');
    </script>
 @stop
 @stop

