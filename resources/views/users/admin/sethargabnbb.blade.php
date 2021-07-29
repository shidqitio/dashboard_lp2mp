@extends('layouts.admin')

@section('title','Set Master BNBB')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('container')

@section('contain')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Set Harga Buku</div>
                    <div class="card-body">
                    <form method="post" action="/updatebnbb" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @foreach($setbnbb as $setbnbb)
                        <input type="hidden" class="form-control" name="id" value="{{$setbnbb->id}}">
                        
                        <label>Pilih File SK </label>
                        <div class="form-group col-xl-3">
                            <input type="text" value="{{$setbnbb->skrektor_bnbb}}">
                            <input type="file" name='skrektorBNBB'>
                        </div>
                        
                        <div class="form-group col-xl-3">
                        <label for="Biaya Cetak">Biaya Cetak</label>
                        <input type="Number" class="form-control" name="biaya_cetak" value="{{$setbnbb->biaya_cetak}}">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="Handling">Handling di UT %</label>
                        <input type="number" value="{{$setbnbb->handling}}" class="form-control"  required name="handling" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="design">Design dan Layout %</label>
                        <input type="number" value="{{$setbnbb->desain_layout}}" class="form-control"  required name="design" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="pengadaan">Pengadaan %</label>
                        <input type="number" value="{{$setbnbb->pengadaan}}" class="form-control"  required name="pengadaan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="Kendali Mutu">Kendali Mutu %</label>
                        <input type="number" value="{{$setbnbb->kendali_mutu}}" class="form-control"  required name="mutu" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="Pemeliharaan">Pemeliharaan %</label>
                        <input type="number" value="{{$setbnbb->pemeliharaan}}" class="form-control"  required name="pemeliharaan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="Pendukung">Pendukung %</label>
                        <input type="number" value="{{$setbnbb->bahan_pendukung}}" class="form-control"  required name="pendukung" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="resiko_penyimpanan">Resiko Penyimpanan %</label>
                        <input type="number" value="{{$setbnbb->penyimpanan}}" class="form-control"  required name="penyimpanan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-3">
                        <label for="resiko mutu">Resiko Mutu %</label>
                        <input type="number" value="{{$setbnbb->resiko_mutu}}" class="form-control"  required name="resiko_mutu" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                        this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
                        ">
                        </div>

                        <div class="form-group col-xl-1">
                        <button type="submit" class="form-control btn btn-success" name="setbnbb1">Submit</button>
                        </div>
                    @endforeach 
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection