@extends('users.pbb.layout.sidebar')

@section('title','pbb')

@section('container')

@section('contain')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>DASHBOARD TUWEB SIPAS
                        <!-- <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div> -->
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
        </div>  

        <div class="row">
            <div class="col-lg-6">
                <div class="card-header">Pencarian Jumlah Berdasarkan Tahun</div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="form-inline" method="get" action="{{route('searchtuweb')}}">
                                {{ csrf_field() }}
                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                                    <label for="Kode MK">Input Tahun</label>
                                </div>
                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                                    <input type="number" class="form-control" name="search" placeholder="co: 20211">
                                </div>  
                                    <button class="mt-1 btn btn-primary">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            
        
            <div class="col-lg-12">
                <div class="card-header">TUWEB SIPAS {{$search}}</div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Jumlah Mata Kuliah</h5>
                                    <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <!-- <th>Kode</th> -->
                                                <th>Fakultas</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($result_pbb_jumlah_matkul_tuweb_sipas as $result_matkul_sipas )
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <!-- <td>{{$result_matkul_sipas->kode_fakultas}}</td> -->
                                                <td>{{$result_matkul_sipas->Fakultas}}</td>
                                                <td>{{$result_matkul_sipas->total}}</td>
                                            @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Jumlah Peserta NIM</h5>
                                    <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <!-- <th>Kode</th> -->
                                                <th>Fakultas</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($result_pbb_jumlah_peserta_nim_tuweb_sipas as $result_nim_sipas )
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <!-- <td>{{$result_nim_sipas->kode_fakultas}}</td> -->
                                                <td>{{$result_nim_sipas->Fakultas}}</td>
                                                <td>{{$result_nim_sipas->semua}}</td>
                                            @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                          
        </div>

    </div>   
</div>
            

<script type="text/javascript" src="./assets/scripts/main.js"></script>

@endsection