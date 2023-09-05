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
            <a href="/admin/laporan" class="nav-link text-white">Laporan</a>
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
                            <u>Tambah Data Laporan</u>
                        </h4>

                        <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">

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
                            <div class="mb-2">
                                <label>SAMPUL</label>
                                <input type="file"
                                    class="form-control @error('sampul') is-invalid @enderror"
                                    name="sampul">

                                @error('sampul')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">ABSTRAK</label>
                                <input type="text" class="form-control @error('abstrak') is-invalid @enderror" name="abstrak"
                                    value="{{ old('abstrak') }}">

                                <!-- error message untuk title -->
                                @error('abstrak')
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
                                <label class="font-weight-bold">TAHUN</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror"
                                    name="tahun" value="{{ old('tahun') }}">

                                <!-- error message untuk title -->
                                @error('tahun')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">INSTANSI PEKERJAAN</label>
                                <input type="text"
                                    class="form-control @error('instansi_pekerjaan') is-invalid @enderror"
                                    name="instansi_pekerjaan" value="{{ old('instansi_pekerjaan') }}">

                                <!-- error message untuk title -->
                                @error('instansi_pekerjaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">RAK DOKUMEN</label>
                                <input type="text" class="form-control @error('rak_dokumen') is-invalid @enderror"
                                    name="rak_dokumen" value="{{ old('rak_dokumen') }}">

                                <!-- error message untuk title -->
                                @error('rak_dokumen')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>LAPORAN PENDAHULUAN</label>
                                <input type="file"
                                    class="form-control @error('laporan_pendahuluan') is-invalid @enderror"
                                    name="laporan_pendahuluan">

                                @error('laporan_pendahuluan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>LAPORAN ANTARA</label>
                                <input type="file" class="form-control @error('laporan_antara') is-invalid @enderror"
                                    name="laporan_antara">

                                @error('laporan_antara')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>LAPORAN AKHIR</label>
                                <input type="file" class="form-control @error('laporan_akhir') is-invalid @enderror"
                                    name="laporan_akhir">

                                @error('laporan_akhir')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>POLICY BRIEF</label>
                                <input type="file" class="form-control @error('policy_brief') is-invalid @enderror"
                                    name="policy_brief">

                                @error('policy_brief')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>NASKAH AKADEMIK</label>
                                <input type="file" class="form-control @error('naskah_akademik') is-invalid @enderror"
                                    name="naskah_akademik">

                                @error('naskah_akademik')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>RANCANGAN PERATURAN</label>
                                <input type="file"
                                    class="form-control @error('rancangan_peraturan') is-invalid @enderror"
                                    name="rancangan_peraturan">

                                @error('rancangan_peraturan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>PRODUK LAINNYA</label>
                                <input type="file" class="form-control @error('produk_lainnya') is-invalid @enderror"
                                    name="produk_lainnya">

                                @error('produk_lainnya')
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