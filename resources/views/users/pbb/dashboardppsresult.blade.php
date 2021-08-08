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
                                    <div>Jumlah Peserta TuWEB SIPAS PPS {{$search}}
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
                                <div class="card-header">TUWEB ATPEM</div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                    <form class="form-inline" method="get" action="{{route('searchtuwebpps')}}">
                                        {{ csrf_field() }}
                                                <div class="form-group col-xl-3">
                                                <label for="Kode MK">Input Tahun</label>
                                                <input type="number" class="form-control" name="search" value="{{$search}}">
                                                <button type="submit" class="btn btn-secondary" name="show">Search</button>
                                                </div>  
                                                
                                        </form>
                                    </div>

                                    
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Jumlah Peserta Matakuliah</h5>
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                            <thead>
                                                    <tr>
                                                    <th>No</th>
                                                    <th>Fakultas</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($pbb_jumlah_mtk_pps as $mtk_pps )
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>PPS</td>
                                                    <td>{{$mtk_pps->totall}}</td>
                                                @endforeach
                                                </tr>
                                                </tbody>
                                                <br/>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Jumlah Kelas</h5>
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Fakultas</th>
                                                    <th>Jumlah Kelas</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($pbb_jumlah_kelas_pps as $kelas_pps )
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>PPS</td>
                                                    <td>{{$kelas_pps->juml}}</td>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">    
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Jumlah Peserta NIM</h5>
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                            <thead>
                                                    <tr>
                                                    <th>No</th>
                                                    <th>Fakultas</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($pbb_jumlah_nim_pps as $nim_pps )
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>PPS</td>
                                                    <td>{{$nim_pps->tota}}</td>
                                                @endforeach
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Jumlah Peserta NIM-MTK</h5>
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Fakultas</th>
                                                    <th>TuWEB SIPAS</th>
                                                    <th>TuWEB ATPEM</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
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
            <script type="text/javascript" src="./assets/scripts/main.js"></script>

@endsection