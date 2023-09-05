@extends('layout.home')
@section('content')
    <div class="container" style="background-color: #2B2B78">
        <div class="row align-items-center">
            <div class="container">
                <div class="row">
                    <div class="d-flex flex-wrap align-items-center sm-3 col-md-3 offset-md-3 mt-4">
                        <img src="https://i.ibb.co/9Y48kYZ/Group-1.png" width="340px" alt="">
                        <div>
                        </div>

                    </div>
                    <div class="col-md-4 sm-4 mb-md-4 mt-md-4 text-center">
                        <br><br>
                        <h3 class="text-white fw-bold  text-uppercase">Sistem Informasi</h2>
                            <h3 class="text-white fw-bold mb-5">Direktori Arsip</h3>
                    </div>
                </div>
                <br><br>
            </div>
       
         </div>
    </div>
</div>
    <div class="container mb-4 mt-4 shadow">

        <div class="container  text-center d-flex">
            <form action="{{ url('/') }}" method="GET">
                    <div class="shadow mt-3 mb-2 rounded-pill input-group d-flex d-inline" >
                    <input class="form-control rounded-pill py-2 pr-5 mr-1 bg-transparent" type="search" name="keyword" placeholder="Cari ....." value="{{ $keyword }}" style="height: 48px">
                    <div class="input-group-append border-0 bg-transparent ml-n5">
                        <button class="btn input-group-append " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                </div>
                        </div>
            </div>
            </form>
        <div class="row align-items-start" id="myUL">
                @foreach ($laporans as $laporan)
                @csrf
                <div class="col-md-4 mt-2 mb-2 text-center d-flex">
                <div class="card shadow-sm" style="width:25rem;">
                <a href="{{ url('detail') }}/{{ $laporan->id }}" style="text-decoration: none" class="d-flex text-center">
                <img src="{{ asset('storage/' .$laporan->sampul) }}" class="card-img-top mt-1" style="width:25rem;height:25rem;">
                <div class="card-body">
                        <h2 class="card-body text-center text-dark">{{ $laporan->nama_paket_pekerjaan }} {{ $laporan->tahun }}</h2>
                    </a>
                </div>
            </div>
           
        </div>
        @endforeach  
       
    </div>
    <div class="row align-items-end">
        <div class="text-end">
            {{ $laporans->links() }}
        </div>
        
    </div>
</div>

    </div>
   
@endsection

