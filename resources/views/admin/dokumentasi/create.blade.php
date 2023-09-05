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
            <a href="/admin/dokumentasi" class="nav-link text-white">Dokumentasi</a>
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
                            <u>Tambah Data Dokumentasi</u>
                        </h4>

                        <form action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kegiatan</label>
                                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan"
                                    value="{{ old('nama_kegiatan') }}">

                                <!-- error message untuk title -->
                                @error('nama_kegiatan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>PRESENSI</label>
                                <input type="file"
                                    class="form-control @error('presensi') is-invalid @enderror"
                                    name="presensi">

                                @error('presensi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>NOTULENSI</label>
                                <input type="file" class="form-control @error('notulensi') is-invalid @enderror"
                                    name="notulensi">

                                @error('notulensi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>FOTO DAN VIDEO</label>
                                <input type="link" class="form-control @error('foto_dan_video') is-invalid @enderror"
                                    name="foto_dan_video">

                                @error('foto_dan_video')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Simpan
                    </button>
                    <div class="d-flex text-center">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document" style="height: 250px;width:300px">
                                                    <div class="modal-content" >
                                                        <div class="modal-body" >
                                                            {{-- <img src="https://ibb.co/r4YT14n" alt=""> --}}
                                                            <img src="https://i.ibb.co/jgmB1g7/image-42.png"
                                                                class="text-center" alt="image-42" border="0">
                                                            <H1 class="fw-bold mb-1">Simpan Data</H1>
                                                            <p>Apakah Andah Yakin Akan Menyimpan Data Ini?</p>
                                                            <button type="submit" class="btn btn-danger">Yakin</button>
                                                            <button type="button" class="btn btn-secondary ms-2"
                                                                data-dismiss="modal">Batal</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                    </div>
                    </form>
                </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- /.content -->
    <!-- ./wrapper -->
    <script>
        CKEDITOR.replace('content');
    </script>
     @stop
     @stop