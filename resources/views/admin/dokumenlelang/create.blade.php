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
            <a href="/admin/dokumenlelang" class="nav-link text-white">Dokumen Lelang</a>
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

                        <form action="{{ route('dokumenlelang.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">KODE</label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode"
                                    value="{{ old('kode') }}">

                                <!-- error message untuk title -->
                                @error('kode')
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
                                <label class="font-weight-bold">RAK DOKUMEN</label>
                                <input type="text"
                                    class="form-control @error('rak_dokumen') is-invalid @enderror"
                                    name="rak_dokumen" value="{{ old('rak_dokumen') }}">

                                <!-- error message untuk title -->
                                @error('rak_dokumen')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">DATA PERUSAHAAN</label>
                                <input type="file"
                                    class="form-control @error('data_perusahaan') is-invalid @enderror"
                                    name="data_perusahaan" value="{{ old('data_perusahaan') }}">

                                <!-- error message untuk title -->
                                @error('data_perusahaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">PENGALAMAN PERUSAHAAN</label>
                                <input type="file" class="form-control @error('pengalaman_perusahaan') is-invalid @enderror"
                                    name="pengalaman_perusahaan" value="{{ old('pengalaman_perusahaan') }}">

                                <!-- error message untuk title -->
                                @error('pengalaman_perusahaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>URAIAN PENGALAMAN PERUSAHAAN</label>
                                <input type="file"
                                    class="form-control @error('uraian_pengalaman_perusahaan') is-invalid @enderror"
                                    name="uraian_pengalaman_perusahaan">

                                @error('uraian_pengalaman_perusahaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>USTEK</label>
                                <input type="file" class="form-control @error('ustek') is-invalid @enderror"
                                    name="ustek">

                                @error('ustek')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>METODOLOGI DAN PROGRAM KERJA</label>
                                <input type="file" class="form-control @error('metodologi_dan_program_kerja') is-invalid @enderror"
                                    name="metodologi_dan_program_kerja">

                                @error('metodologi_dan_program_kerja')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>JADWAL PEKERJAAN</label>
                                <input type="file" class="form-control @error('jadwal_pekerjaan') is-invalid @enderror"
                                    name="jadwal_pekerjaan">

                                @error('jadwal_pekerjaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>TENAGA AHLI</label>
                                <input type="file" class="form-control @error('tenaga_ahli') is-invalid @enderror"
                                    name="tenaga_ahli">

                                @error('tenaga_ahli')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>KOMPOSISI PENUGASAN</label>
                                <input type="file" class="form-control @error('komposisi_penugasan') is-invalid @enderror"
                                    name="komposisi_penugasan">

                                @error('komposisi_penugasan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>JADWAL PENUGASAN TA</label>
                                <input type="file" class="form-control @error('jadwal_penugasan_ta') is-invalid @enderror"
                                    name="jadwal_penugasan_ta">

                                @error('jadwal_penugasan_ta')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>RAB PENAWARAN</label>
                                <input type="file" class="form-control @error('rab_penawaran') is-invalid @enderror"
                                    name="rab_penawaran">

                                @error('rab_penawaran')
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