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
            <a href="/admin/rapat" class="nav-link text-white">Rapat</a>
        </li>
    </ul>
</nav>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <h4 class="mb-3">
                            <u>Edit Data Rapat</u>
                        </h4>
 
                        <form action="{{ route('rapat.update', $rapat->id) }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            

                            {{-- @method('put')
                            @csrf --}}
                           
                            
                            <div class="form-group">
                                <label class="font-weight-bold">KODE</label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode"
                                    value="{{ old('kode',$rapat->kode) }}">

                                <!-- error message untuk title -->
                                @error('kode')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">PCM</label>
                                <input type="text"
                                    class="form-control @error('pcm') is-invalid @enderror"
                                    name="pcm" value="{{ old('pcm',$rapat->pcm) }}">

                                <!-- error message untuk title -->
                                @error('pcm')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">TAHUN</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror"
                                    name="tahun" value="{{ old('tahun',$rapat->tahun) }}">

                                <!-- error message untuk title -->
                                @error('tahun')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>FGD 1</label>
                                <input type="hidden" name="oldFgd1" value="{{ $rapat->fgd1 }}">
                                <input type="file"
                                    class="form-control @error('fgd1') is-invalid @enderror"
                                    name="fgd1">

                                @error('fgd1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>FGD 2</label>
                                <input type="hidden" name="oldFgd2" value="{{ $rapat->fgd2 }}">
                                <input type="file" class="form-control @error('fgd2') is-invalid @enderror"
                                    name="fgd2">

                                @error('fgd2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label>FGD 3</label>
                                <input type="hidden" name="oldFgd3" value="{{ $rapat->fgd3 }}">
                                <input type="file" class="form-control @error('fgd3') is-invalid @enderror"
                                    name="fgd3">

                                @error('fgd3')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                    </div>
                    <!-- Button trigger modal -->
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
                    </div>
                    </form>
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

