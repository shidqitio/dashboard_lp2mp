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
                                <div class="card-header">TUWEB SIPAS </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form class="form-inline" method="get" action="{{route('searchtuwebsipas')}}">
                                        {{ csrf_field() }}
                                                <div class="form-group col-xl-3">
                                                <label for="Kode MK">Input Tahun</label>
                                                <input type="number" class="form-control" name="search" placeholder="contoh : 20211">
                                                <button type="submit" class="btn btn-secondary" name="show">Search</button>
                                                </div>  
                                                
                                        </form>
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