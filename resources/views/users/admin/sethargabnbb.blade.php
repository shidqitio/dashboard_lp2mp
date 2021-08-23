@extends('layouts.admin')

@section('title','Set Master BNBB')

@section('container')

@section('contain')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Set Harga Master BNBB</div>
                        <div class="card-body">
                            <form method="post" action="/updatebnbb" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @foreach($setbnbb as $setbnbb)
                                <div class="position-relative form-group">
                                    <input type="hidden" class="form-control" name="id" value="{{$setbnbb->id}}">
                                    <label>Pilih File SK </label>
                                </div>
                                <div class="position-relative form-group">
                                    <input type="text" value="{{$setbnbb->skrektor_bnbb}}">
                                    <input type="file" name='skrektorBNBB'>
                                </div>
                                
                                <div class="position-relative form-group">
                                    <label for="Biaya Cetak">Biaya Cetak</label>
                                    <input type="Number" class="form-control" name="biaya_cetak" value="{{$setbnbb->biaya_cetak}}">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="Handling">Handling di UT %</label>
                                    <input type="number" value="{{$setbnbb->handling}}" class="form-control"  required name="handling" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="design">Design dan Layout %</label>
                                    <input type="number" value="{{$setbnbb->desain_layout}}" class="form-control"  required name="design" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="pengadaan">Pengadaan %</label>
                                    <input type="number" value="{{$setbnbb->pengadaan}}" class="form-control"  required name="pengadaan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="Kendali Mutu">Kendali Mutu %</label>
                                    <input type="number" value="{{$setbnbb->kendali_mutu}}" class="form-control"  required name="mutu" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="Pemeliharaan">Pemeliharaan %</label>
                                    <input type="number" value="{{$setbnbb->pemeliharaan}}" class="form-control"  required name="pemeliharaan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="Pendukung">Pendukung %</label>
                                    <input type="number" value="{{$setbnbb->bahan_pendukung}}" class="form-control"  required name="pendukung" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="resiko_penyimpanan">Resiko Penyimpanan %</label>
                                    <input type="number" value="{{$setbnbb->penyimpanan}}" class="form-control"  required name="penyimpanan" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="resiko mutu">Resiko Mutu %</label>
                                    <input type="number" value="{{$setbnbb->resiko_mutu}}" class="form-control"  required name="resiko_mutu" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                                    this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                </div>
                                <button class="mt-1 btn btn-primary" name="setbnbb1">Submit</button>
                                @endforeach 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection