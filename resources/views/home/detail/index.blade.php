@extends('layout.home')
@section('content')

<div class="container">
    <div class="row">
            <table class="mb-5">
                <tr>
                    <td rowspan="5" class="col-md-4">
                        <div>
                            <img class="shadow" src="{{ asset('storage/' .$laporan->sampul) }}" alt="" style="width:60%"></>
                        </div>
                    </td>
                    <td colspan="3" class="col-md-8">
                        <div>
                            <h2>{{ $laporan->nama_paket_pekerjaan }}</h2>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Abstrak</td>
                    <td>:</td>
                    <td>{{ $laporan->abstrak }}</></td>
                </tr>
                <tr>
                    <td>Nama Paket Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $laporan->nama_paket_pekerjaan }}</></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td>{{ $laporan->tahun }}</></td>
                </tr>
                    
                {{-- <div class="col-md-3"> --}}
                    
                {{-- </div> --}}
            </div>
        </div>
    </div>
</table><br>
    
<table class="table table-bordered border-dark">
    <tbody>
        <tr>
            <th>
                LAPORAN PENDAHULUAN
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->laporan_pendahuluan)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->laporan_pendahuluan) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </a>
        </tr>
        <tr>
            <th>
                LAPORAN ANTARA
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->laporan_antara)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->laporan_antara) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </tr>
        <tr>
            <th>
                LAPORAN AKHIR
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->laporan_akhir)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->laporan_akhir) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </tr>
        <tr>
            <th>
                NASKAH AKADEMIK
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->naskah_akademik)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->naskah_akademik) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </tr>
        <tr>
            <th>
                POLICY BRIEF
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->policy_brief)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->policy_brief) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </tr>
        <tr>
            <th>
                RANCANGAN PERATURAN
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->rancangan_peraturan)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->rancangan_peraturan) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </tr>
        <tr>
            <th>
                PRODUK LAINNYA
            </th>
            @guest
            <td class="text-center">
                <i class="fas fa-lock " style="color:red" ></i>
            </td>
            @endguest
            @auth
            @if ($laporan->produk_lainnya)
            <td class="text-center">
                <a class="text-dark" target="blank" style="text-decoration: none"
                href="{{ asset('storage/' .$laporan->produk_lainnya) }}">
                <i class="fas fa-unlock " style="color:rgba(9, 255, 0, 0.945)" ></i></a>
            </td>
            @else
            <td class="text-center">
                <span> Tidak Ada</span>
            </td>
            @endif
            @endauth
        </tr>
    </tbody>
    </table>
</div>
@endsection