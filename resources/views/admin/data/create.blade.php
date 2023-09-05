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
            <a href="/admin/data" class="nav-link text-white">Data</a>
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

                        <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">NO</label>
                                <input type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                                    value="{{ old('no') }}">

                                <!-- error message untuk title -->
                                @error('no')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA PAKET PEKERJAAN</label>
                                <input type="text"
                                    class="form-control @error('nama_paket_pekerjaan') is-invalid @enderror"
                                    name="nama_paket_pekerjaan" value="{{ old('nama_paket_pekerjaan') }}">

                                <!-- error message untuk title -->
                                @error('nama_paket_pekerjaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">SUMBER DATA</label>
                                <input type="file"
                                    class="form-control @error('sumber_data') is-invalid @enderror"
                                    name="sumber_data" value="{{ old('sumber_data') }}">

                                <!-- error message untuk title -->
                                @error('sumber_data')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">DATA SEKUNDER</label>
                                <input type="file" class="form-control @error('data_sekunder') is-invalid @enderror"
                                    name="data_sekunder" value="{{ old('data_sekunder') }}">

                                <!-- error message untuk title -->
                                @error('data_sekunder')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>DATA PRIMER</label>
                                <input type="file"
                                    class="form-control @error('data_primer') is-invalid @enderror"
                                    name="data_primer">

                                @error('data_primer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>PENGOLAHAN DATA</label>
                                <input type="file" class="form-control @error('pengolahan_data') is-invalid @enderror"
                                    name="pengolahan_data">

                                @error('pengolahan_data')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>DAFTAR PERTANYAAN</label>
                                <input type="file" class="form-control @error('daftar_pertanyaan') is-invalid @enderror"
                                    name="daftar_pertanyaan">

                                @error('daftar_pertanyaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>KRITERIA RESPONDEN</label>
                                <input type="file" class="form-control @error('kriteria_responden') is-invalid @enderror"
                                    name="kriteria_responden">

                                @error('kriteria_responden')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>HASIL RESPONDEN</label>
                                <input type="file" class="form-control @error('hasil_responden') is-invalid @enderror"
                                    name="hasil_responden">

                                @error('hasil_responden')
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