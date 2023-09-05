
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
            <a href="/admin/kontrak" class="nav-link text-white">Kontrak</a>
        </li>
    </ul>

    <!-- Right navbar links -->
</nav>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th colspan="6"><a href="{{ route('kontrak.create') }}"><button type="button"
                                    class="btn text-white" style="background-color: #49EA11">+ Tambah
                                    Data</button></a>
                        </th>
                        
                        <th rowspan="6" class="d-flex justify-content-end">
                            <form action="{{ url('/admin/kontrak') }}" method="GET">
                            <div class="shadow rounded-pill input-group input-group " style="width: 246px" >
                            <input class="form-control  rounded-pill" type="text" name="keyword" placeholder="Cari ....." value="{{ $keyword }}" style="height: 48px">
                            <div class="input-group-append">
                                <button class="btn rounded-pill border-0 ml-n5" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                        </div>
                                </div>
                            </form>
    </th>
    </tr>
    </thead>
    </table>
            <!-- Content Header (Page header) -->
                
                <div class="container-fluid text-center">
                    <div class="row">
                        <table class="table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">Kode</th>
                                    <th rowspan="2">Nama Paket Pekerjaan</th>
                                    <th rowspan="2">Tahun</th>
                                    <th rowspan="2">Rak Dokumen</th>
                                    <th rowspan="2">SPK</th>
                                    <th rowspan="2">SPMK</th>
                                    <th rowspan="2">BAST</th>
                                    <th colspan="3">PAJAK</th>
                                    <th rowspan="2">REFERENSI PERUSAHAAN</th>
                                    <th rowspan="2">REFERENSI TA</th>
                                    <th rowspan="2">ACTION</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kontraks as $kontrak)
                                @csrf
                                <tr>
                                    <td>{{ $kontrak->kode }}</td>
                                    <td>{{ $kontrak->nama_paket_pekerjaan }}</td>
                                    <td>{{ $kontrak->tahun }}</td>
                                    <td>{{ $kontrak->rak_dokumen }}</td>
                                    <td>
                                        @if ($kontrak->spk)
                                        <a class="text-decoration:none text-dark" target="blank" 
                                            href="{{ asset('storage/' .$kontrak->spk) }}">ADA</a>
                                        @else
                                        <p> Tidak Ada</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->spmk)
                                        <a class="text-decoration:none text-dark" target="blank" 
                                            href="{{ asset('storage/' .$kontrak->spmk) }}">ADA</a>
                                        @else
                                        <p> Tidak Ada</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->bast)
                                        <a class="text-decoration:none text-dark" target="blank"
                                            href="{{asset('storage/' .$kontrak->bast) }}">ADA</a>
                                        @else
                                        <p> Tidak Ada</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->pajak1)
                                        <a class="text-decoration:none text-dark" target="blank" 
                                            href="{{ asset('storage/' .$kontrak->pajak1)  }}">ADA</a>
                                            @else
                                        <p> Tidak Ada</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->pajak2)
                                        <a class="text-decoration:none text-dark" target="blank" 
                                            href="{{ asset('storage/' .$kontrak->pajak2)  }}">ADA</a>
                                            @else
                                        <p> Tidak Ada</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->pajak3)
                                        <a class="text-decoration:none text-dark" target="blank" 
                                            href="{{ asset('storage/' .$kontrak->pajak3)  }}">ADA</a>
                                            @else
                                        <p> Tidak Ada</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->referensi_perusahaan)
                                        <a class="text-decoration:none text-dark" target="blank"
                                            href="{{ asset('storage/' .$kontrak->refenresi_perusahaan) }}">ADA</a>
                                            @else
                                        <p> Sedang Proses (PPK Cuti)</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kontrak->referensi_ta)
                                        <a class="text-decoration:none text-dark" target="blank" 
                                            href="{{ asset('storage/' .$kontrak->referensi_ta) }}">ADA</a>
                                            @else
                                        <p> Sedang Proses (PPK Cuti)</p>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                        {{-- Trigger modal --}}
                                            <a href="{{ route('kontrak.edit', $kontrak->id) }}"><i
                                                    class="text-black d-block"><svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="33" height="33" rx="5" fill="#2B2B78"/>
                                                        <path d="M18.8055 11.6997L20.3006 13.1941M19.7669 10.3832L15.7242 14.4258C15.5154 14.6344 15.3729 14.9002 15.3148 15.1896L14.9414 17.0588L16.8106 16.6847C17.1 16.6268 17.3655 16.4849 17.5744 16.276L21.6171 12.2333C21.7386 12.1118 21.835 11.9676 21.9007 11.8089C21.9664 11.6502 22.0003 11.4801 22.0003 11.3083C22.0003 11.1365 21.9664 10.9663 21.9007 10.8076C21.835 10.6489 21.7386 10.5047 21.6171 10.3832C21.4956 10.2617 21.3514 10.1653 21.1927 10.0996C21.0339 10.0338 20.8638 10 20.692 10C20.5202 10 20.3501 10.0338 20.1914 10.0996C20.0326 10.1653 19.8884 10.2617 19.7669 10.3832V10.3832Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M20.5885 18.4701V20.5878C20.5885 20.9622 20.4398 21.3213 20.175 21.5861C19.9102 21.8508 19.5511 21.9996 19.1767 21.9996H11.4118C11.0374 21.9996 10.6783 21.8508 10.4135 21.5861C10.1487 21.3213 10 20.9622 10 20.5878V12.8229C10 12.4485 10.1487 12.0894 10.4135 11.8246C10.6783 11.5599 11.0374 11.4111 11.4118 11.4111H13.5295" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        
                                                </i></a>
                                                <button type="button" class="border-0" data-bs-toggle="modal" data-bs-target="#deleteUserModal_{{$kontrak->id}}">
                                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="33" height="33" rx="5" fill="#FF0D0D" />
                                                        <path
                                                            d="M15.25 12.0893V12.3214H17.75V12.0893C17.75 11.7814 17.6183 11.4862 17.3839 11.2685C17.1495 11.0509 16.8315 10.9286 16.5 10.9286C16.1685 10.9286 15.8505 11.0509 15.6161 11.2685C15.3817 11.4862 15.25 11.7814 15.25 12.0893ZM14.25 12.3214V12.0893C14.25 11.5352 14.4871 11.0038 14.909 10.6119C15.331 10.2201 15.9033 10 16.5 10C17.0967 10 17.669 10.2201 18.091 10.6119C18.5129 11.0038 18.75 11.5352 18.75 12.0893V12.3214H22.5C22.6326 12.3214 22.7598 12.3703 22.8536 12.4574C22.9473 12.5445 23 12.6626 23 12.7857C23 12.9089 22.9473 13.0269 22.8536 13.114C22.7598 13.2011 22.6326 13.25 22.5 13.25H21.746L20.8 20.9423C20.7302 21.5088 20.4384 22.0317 19.9801 22.4112C19.5218 22.7907 18.9291 23.0003 18.315 23H14.685C14.0709 23.0003 13.4782 22.7907 13.0199 22.4112C12.5616 22.0317 12.2698 21.5088 12.2 20.9423L11.254 13.25H10.5C10.3674 13.25 10.2402 13.2011 10.1464 13.114C10.0527 13.0269 10 12.9089 10 12.7857C10 12.6626 10.0527 12.5445 10.1464 12.4574C10.2402 12.3703 10.3674 12.3214 10.5 12.3214H14.25ZM13.194 20.8364C13.2357 21.1762 13.4107 21.4899 13.6855 21.7177C13.9602 21.9454 14.3157 22.0714 14.684 22.0714H18.3155C18.6838 22.0714 19.0393 21.9454 19.314 21.7177C19.5888 21.4899 19.7638 21.1762 19.8055 20.8364L20.74 13.25H12.2605L13.194 20.8364ZM15 14.875C15.1326 14.875 15.2598 14.9239 15.3536 15.011C15.4473 15.0981 15.5 15.2161 15.5 15.3393V19.9821C15.5 20.1053 15.4473 20.2234 15.3536 20.3104C15.2598 20.3975 15.1326 20.4464 15 20.4464C14.8674 20.4464 14.7402 20.3975 14.6464 20.3104C14.5527 20.2234 14.5 20.1053 14.5 19.9821V15.3393C14.5 15.2161 14.5527 15.0981 14.6464 15.011C14.7402 14.9239 14.8674 14.875 15 14.875ZM18.5 15.3393C18.5 15.2161 18.4473 15.0981 18.3536 15.011C18.2598 14.9239 18.1326 14.875 18 14.875C17.8674 14.875 17.7402 14.9239 17.6464 15.011C17.5527 15.0981 17.5 15.2161 17.5 15.3393V19.9821C17.5 20.1053 17.5527 20.2234 17.6464 20.3104C17.7402 20.3975 17.8674 20.4464 18 20.4464C18.1326 20.4464 18.2598 20.3975 18.3536 20.3104C18.4473 20.2234 18.5 20.1053 18.5 19.9821V15.3393Z"
                                                            fill="white" />
                                                    </svg>
                    
                                            </button>
                    
                                                    <form  method="POST"
                                                        action="{{ route('kontrak.destroy',$kontrak->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                            <div class="modal fade" id="deleteUserModal_{{$kontrak->id}}" tabindex="-1" role="dialog"
                                                            aria-labelledby="deleteUserLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document" style="height: 250px;width:300px">
                                                                <div class="modal-content" >
                                                                    <div class="modal-body" >
                                                                        <img src="https://i.ibb.co/jgmB1g7/image-42.png"
                                                                            class="text-center" alt="image-42" border="0">
                                                                        <H1 class="fw-bold mb-1">Hapus Data</H1>
                                                                        <p>Apakah Andah Yakin Akan Menghapus Data Ini?</p>
                                                                        <button type="submit" class="btn btn-danger ">Hapus</button>
                                                                        <button type="button" class="btn btn-secondary ms-3"
                                                                            data-bs-dismiss="modal">Batal</button>
                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>               
                                    </td>
                                </tr>
                            </tbody>
                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda Yakin ingin menghapus data ini
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button> --}}
                                                        {{-- <form method="POST" action="{{ route('laporan.destroy',$laporan->id) }}" class="d-inline">
                                                            @csrf
                                                            @method('delete') --}}
                                                    {{-- <button type="submit" class="btn btn-danger" data-toggle="modal1"
                                                        >Hapus</button> --}}
                                                    {{-- </form> --}}
                                                {{-- </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                
                                    {{-- </td> --}}
                                {{-- </tr> --}}
                                @empty
                                <div class="alert text-white" style="background-color: #2B2B78">
                                    Data Kontrak belum Tersedia.
                                </div>
                                @endforelse
                        </table>
                        
                        {{ $kontraks->links() }}
                    </div>
                </div>
        </div>
        </section>

      
    </div>
   
    </div>
   
    @stop
    @stop

