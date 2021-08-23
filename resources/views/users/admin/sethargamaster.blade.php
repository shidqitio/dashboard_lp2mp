@extends('layouts.admin')

@section('title','Set Master Harga')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('container')

@section('contain')
<div class="app-main__outer">
    <div class="app-main__inner">    
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Set Harga Buku</div>
                            <div class="card-body">
                                <form method="post" action="/setskrektorBAC" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @foreach($skrektorBAC as $skrektorBAC)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$skrektorBAC->id}}">
                                        <label>Pilih File SK </label>
                                    <br>
                                    </div>
                                    <div class="position-relative form-group">
                                        <input type="text" value="{{$skrektorBAC->skrektor_BA}}">
                                        <input type="file" name='skrektorBAC' required="required">
                                    </div>

                                    <button class="mt-1 btn btn-primary">Submit</button>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            

            <div class="row">
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-header">BAC Mahasiswa</div>
                            <div class="card-body">
                                <form method="post"  action="/setharga">
                                    {{ csrf_field() }}
                                    @foreach($cetak as $cetak)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$cetak->id_cetak}}">
                                        <div class="form-group col-xl-3">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="Biaya Cetak">Biaya Cetak</label>
                                        <input type="Number" class="form-control" name="biaya_cetak" value="{{$cetak->biaya_cetak}}">
                                    </div>

                                    <button class="mt-1 btn btn-primary" name="cetak1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post"  action="/sethandling">
                                    {{ csrf_field() }}
                                    @foreach($handling as $handling)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$handling->id_handling}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="Handling">Handling di UT %</label>
                                        <input type="number" value="{{$handling->handling}}" class="form-control"  required name="handling" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" 
                                        onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="handling1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post"  action="/setdesign">
                                    {{ csrf_field() }}
                                    @foreach($design as $design)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$design->id_design}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="design">Design dan Layout %</label>
                                        <input type="number" value="{{$design->designlayout}}" class="form-control"  required name="design" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" 
                                        onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="design1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post"  action="/setpengadaan">
                                    {{ csrf_field() }}
                                    @foreach($pengadaan as $pengadaan)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$pengadaan->id_pengadaan}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="pengadaan">Pengadaan %</label>
                                        <input type="number" value="{{$pengadaan->pengadaan}}" class="form-control"  required name="pengadaan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" 
                                        onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="pengadaan1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post"  action="/setkendalimutu">
                                    {{ csrf_field() }}
                                    @foreach($mutu as $mutu)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$mutu->id_mutu}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="Kendali Mutu">Kendali Mutu %</label>
                                        <input type="number" value="{{$mutu->kendali_mutu}}" class="form-control"  required name="mutu" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" 
                                        onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="mutu1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post"  action="/setpemeliharaan">
                                    {{ csrf_field() }}
                                    @foreach($pemeliharaan as $pemeliharaan)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$pemeliharaan->id_pemeliharaan}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="Pemeliharaan">Pemeliharaan %</label>
                                        <input type="number" value="{{$pemeliharaan->pemeliharaan}}" class="form-control"  required name="pemeliharaan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="pemeliharaan1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setpendukung">
                                    {{ csrf_field() }}
                                    @foreach($pendukung as $pendukung)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$pendukung->id_pendukung}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="Pendukung">Pendukung %</label>
                                        <input type="number" value="{{$pendukung->pendukung}}" class="form-control"  required name="pendukung" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="pendukung1">Submit</button>
                                    @endforeach
                                </form>
                                
                                <form method="post" action="/setresikopenyimpanan">
                                    {{ csrf_field() }}
                                    @foreach($resiko_penyimpanan as $resiko)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$resiko->id_resiko}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_penyimpanan">Resiko Penyimpanan %</label>
                                        <input type="number" value="{{$resiko->resiko}}" class="form-control"  required name="resiko_penyimpanan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="resiko_penyimpanan1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setresiko_mutu">
                                    {{ csrf_field() }}
                                    @foreach($resiko_mutu as $resiko_mutu)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$resiko_mutu->id_resikomutu}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Resiko Mutu %</label>
                                        <input type="number" value="{{$resiko_mutu->resiko_mutu}}" class="form-control"  required name="resiko_mutu" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="resiko_mutu1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setmitra">
                                    {{ csrf_field() }}
                                    @foreach($mitra as $mitra)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$mitra->id}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Mitra %</label>
                                        <input type="number" value="{{$mitra->mitra}}" class="form-control"  required name="mitra" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="mitra1">Submit</button>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-header">BAC Non Mahasiswa</div>
                            <div class="card-body">
                                <form method="post" action="/setpengembanganmateri">
                                    {{ csrf_field() }}
                                    @foreach($pengembanganmateri as $materi)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$materi->id}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Pengembangan Materi %</label>
                                        <input type="number" value="{{$materi->pengembangan_materi}}" class="form-control"  required name="pengembangan_materi" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="pengembangan_materi1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setpengembangan">
                                    {{ csrf_field() }}
                                    @foreach($pengembangan as $pengembangan)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$pengembangan->id}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Pengembangan %</label>
                                        <input type="number" value="{{$pengembangan->pengembang}}" class="form-control"  required name="pengembangan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="pengembangan1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setprodukba">
                                    {{ csrf_field() }}
                                    @foreach($produkba as $produkba)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$produkba->id}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Produk si BA %</label>
                                        <input type="number" value="{{$produkba->produk_ba}}" class="form-control"  required name="produkba" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="produkba1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setgudangba">
                                    {{ csrf_field() }}
                                    @foreach($gudangba as $gudangba)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$gudangba->id}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Pergudangan Ba %</label>
                                        <input type="number" value="{{$gudangba->gudang_ba}}" class="form-control"  required name="gudangba" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="gudangba1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/royalti">
                                    {{ csrf_field() }}
                                    @foreach($royalti as $royalti)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$royalti->id}}">
                                    </div>                              
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Royalti %</label>
                                        <input type="number" value="{{$royalti->royalti}}" class="form-control"  required name="royalti" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="royalti1">Submit</button>
                                    @endforeach
                                </form>

                                <form method="post" action="/setmitranonmhs">
                                    {{ csrf_field() }}
                                    @foreach($mitra_nonmhs as $mitra)
                                    <div class="position-relative form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{$mitra->id}}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="resiko_mutu">Mitra Non Mahasiswa %</label>
                                        <input type="number" value="{{$mitra->mitra_nonmhs}}" class="form-control"  required name="mitra_nonmhs" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                    </div>
                                    <button class="mt-1 btn btn-primary" name="mitra_nonmhs1">Submit</button>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>