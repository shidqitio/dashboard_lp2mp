@extends('layouts.admin')

@section('title','Tambah Jadwal')

@section('container')


@section('contain')

<div class="app-main__outer">
  <div class="app-main__inner">
      <div class="row">
          <div class="col-md-12">
              <div class="main-card mb-3 card">
                  <div class="card-header">Tambah Jadwal Rapat</div>
        <div class="card-body">

@if(count($errors)>0)
  <ul>
      @foreach ($errors->all() as $errors)
          <li class="alert alert-danger">Nama Rapat tidak boleh lebih dari 150</li>
      @endforeach
  </ul>
@endif


<form method="post" action="/jadwal" enctype="multipart/form-data">
	{{ csrf_field() }}
  <div class="position-relative form-group">
    <label for="Tanggal" style="padding-left:15;">Tanggal</label>
    <div class="position-relative form-group">
    <input type="date" name="tanggal" class="form-control-sm" id="tanggal" placeholder="tanggal" required>
    </div>
  </div>
  
  <div class="position-relative form-group">
    <label for="Nama Rapat" style="padding-left:20">Nama Rapat</label>
    <div class="position-relative form-group">
     <input type="text" name="nama_rapat"  id="nama_rapat" class="form-control-md"  placeholder="Nama Rapat" required>
     </div>
  </div>

  <div class="position-relative form-group">
    <label for="Tempat" style="padding-left:15;">Tempat</label>
    <div class="position-relative form-group">
     <input type="text" name="tempat"  id="tempat" class="form-control-md"  placeholder="Tempat" required>
     </div>
  </div>

  <div class="position-relative form-group">
    <label for="Waktu" style="padding-left:15;">Waktu</label>
    <div class="position-relative form-group">
     <input type="text" name="waktu" class="form-control-sm" id="timepicker" placeholder="Waktu" timepicker required>
    </div>
  </div>

  <div class="position-relative form-group">
    <label for="Keterangan" style="padding-left:15;">Keterangan</label>
    <div class="position-relative form-group">
    <textarea class="form-control-md" name="keterangan" placeholder="Keterangan" id="keterangan" rows="3"></textarea>
    </div>
  </div>
  
  <div class="position-relative form-group">
    <label for="Status" style="padding-left:15;">status</label>
    <div class="position-relative form-group">
     
			<select class="custom-select mr-sm-2" name="status" id="inlineFormCustomSelect" style="margin-left:15;" >
        <option selected>Choose...</option>
        <option value="Draft">Draft</option>
				<option value="Jadi">Jadi</option>
        <option value="Tunda">Tunda</option>
        <option value="Selesai">Selesai</option>
				<option value="Batal">Batal</option>
			</select>
    </div>
  </div>

  <div class="position-relative form-group">
    <label for="Undangan" style="padding-left:15;">Undangan</label>
    <br>
    <input type="file" name="undangan" style="padding-left:14;">
  </div>

  <div class="position-relative form-group">
    <label for="Risalah" style="padding-left:15;">Risalah</label>
    <br>
    <input type="file" name="risalah" style="padding-left:14;">
  </div>
 
 

  <div class="position-relative form-group">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
      <a href="/jadwal" class="btn btn-danger mb-2">cancel</a>
  </div>



</form>
</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
  $('#timepicker').timepicker();
</script>
@endsection

