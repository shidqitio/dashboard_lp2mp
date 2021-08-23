<!-- @extends('template/main')

@section('title','Rencana Jadwal Rapat')

@section('container')
 

 <form method="post">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="Tanggal">Tanggal</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="tanggal" value="{{$jadwal->tanggal}}">
    </div>
  </div>
  <div class="form-group">
    <label for="Nama Rapat">Nama Rapat</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="nama_rapat" value="{{$jadwal->nama_rapat}}">
    </div>
  </div>
  <div class="form-group">
    <label for="Tempat">Tempat</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="tempat" value="{{$jadwal->tempat}}">
    </div>
  </div>
  <div class="form-group">
    <label for="Waktu">Waktu</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="waktu" value="{{$jadwal->waktu}}">
    </div>
  </div>
  <div class="form-group">
    <label for="Keterangan">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="keterangan" value="{{$jadwal->keterangan}}">
    </div>
  </div>
</form> -->
