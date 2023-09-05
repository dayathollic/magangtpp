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
    {{-- @extends('layout.search') --}}
    <!-- Right navbar links -->
</nav>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="card-deck mb-4">
            <div class="card shadow" >
                <div class="card-header  text-center" style="background-color: #21BFB3">
                    <a href="{{ route('activity.index') }}" class="nav-link">
                        <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-log-file-data-analytics-flaticons-lineal-color-flat-icons-2.png" style="width: 110px"/>
                </div>
                <div class="card-body">
                    <h5 class="card-text text-bold text-center">LOG ACTIVITY</h5>
                </div>
            </a>
            </div>

            <div class="card shadow">
                <div class="card-header d-flex" style="background-color: #D8A626">
                    <img src="https://img.icons8.com/fluency/96/null/group.png" class="ms-3" style="width: 100px">
                    <span class="ms-5 text-white d-inline mt-1 text-bold" style="font-size:80px">{{ $data }} </span>
                </div>
                <div class="card-body">
                    <a href="{{ route('usermanagement.index') }}" class="nav-link">
                    <h5 class="card-text text-bold text-center">USER</h5>
                    </a>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header d-flex" style="background-color: #BF21AF">
                    <img src="https://img.icons8.com/fluency/96/null/product-documents.png" class="ms-3" style="width: 100px">
                    <span class="ms-5 text-white d-inline mt-1 text-bold" style="font-size:80px">6</span>
                </div>
                <div class="card-body">
                    <h5 class="card-text text-bold text-center">JENIS ARSIP</h5>
                </div>
            </div>
        </div>
        </div>
        
        <div class="card shadow">
            <div class="card-body">
                <img src="https://img.icons8.com/fluency/48/000000/link-company-parent.png"/>
                <span class="text-bold" style="font-size:35px">PT. TRISAKTI PILAR PERSADA</span>
            </div>
            <div class="container table table-borderless ">
                <div class="row align-items-start">
                    <div class="col d-flex d-inline">
                        <table class="d-inline d-flex">
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <th>PT. Trisakti Pilar Persada</th>
                            </tr>
                            <tr>
                                <th>Tahun Berdiri</th>
                                <th>:</th>
                                <th>2013</th>
                            </tr>
                            <tr>
                                <th>Badan Hukum</th>
                                <th>:</th>
                                <th>Perseroan Terbatas</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>:</th>
                                <th>trisaktipilarpersada@gmail.com</th>
                            </tr>
                            <tr>
                                <th>Alamat Kantor</th>
                                <th>:</th>
                                <th>Perum Sinar Giripeni Indah Blok D No. 5,<br> Giripeni, kecamatan Wates, Kulon Progo,<br> Daerah Istimewa Yogyakarta 55651</th>
                            </tr>
                            <tr>
                                <th>Alamat Studio</th>
                                <th>:</th>
                                <th>Jl. Kubus Gg. Buntu No. 8 Pojok Tiyasan,<br> Condongcatur, Depok, Sleman, Daerah <br> Istimewa Yogyakarta 55283</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col d-flex">
                        <a href="https://drive.google.com/file/d/16TC9kV30eFeBXsz8U66xZVeoXl9soXXl/view?usp=share_link" target="blank">
                            <img src="https://i.ibb.co/f8mDmf6/1.png" alt="" class="align-items-center d-inline ms-5" style="width: 300px">
                        </a>
                    </div>
                </div>  
            </div>
        </div>
</div>
</section>
@stop
    @stop
