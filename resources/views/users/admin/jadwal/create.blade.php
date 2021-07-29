@extends('layouts.admin')

@section('title','Tambah Jadwal')

@section('container')


@section('contain')

<div class="container">
<h1>Tambah Jadwal Rapat </h1>

@if(count($errors)>0)
  <ul>
      @foreach ($errors->all() as $errors)
          <li class="alert alert-danger">Nama Rapat tidak boleh lebih dari 150</li>
      @endforeach
  </ul>
@endif


<form method="post" action="/jadwal" enctype="multipart/form-data">
	{{ csrf_field() }}
  <div class="form-group" >
    <label for="Tanggal" style="padding-left:15;">Tanggal</label>
    <br/>
    <div class="col-sm-3" style="margin-left:0;">
    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="tanggal" required>
    </div>
    <br/>
  </div>
  
  <div class="form-group">
    <label for="Nama Rapat" style="padding-left:20">Nama Rapat</label>
    <br/>
    <div class="col-sm-6">
     <input type="text" name="nama_rapat"  id="nama_rapat" class="form-control"  placeholder="Nama Rapat" required>
     </div>
     <br/>
  </div>

  <div class="form-group">
    <label for="Tempat" style="padding-left:15;">Tempat</label>
    <br/>
    <div class="col-sm-6">
     <input type="text" name="tempat"  id="tempat" class="form-control"  placeholder="Tempat" required>
     </div>
     <br/>
  </div>

  <div class="form-group">
    <label for="Waktu" style="padding-left:15;">Waktu</label>
    <br/>
    <div class="col-sm-3">
     <input type="text" name="waktu" class="form-control" id="timepicker" placeholder="Waktu" timepicker required>
     </div>
     <br/>
  </div>

  <div class="form-group">
    <label for="Keterangan" style="padding-left:15;">Keterangan</label>
    <br/>
    <div class="col-sm-6">
    <textarea class="form-control" name="keterangan" placeholder="Keterangan" id="keterangan" rows="3"></textarea>
    </div>
    <br/><br/> <br/>
  </div>
  
  <div class="form-group">
    <label for="Status" style="padding-left:15;">status</label>
    <br/> 
    <div class="col-sm-6">
     
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
    <br>

  
  <div class="form-group">
    <label for="Undangan" style="padding-left:15;">Undangan</label>
    <br>
    <input type="file" name="undangan" style="padding-left:14;">
  </div>

  <div class="form-group">
    <label for="Risalah" style="padding-left:15;">Risalah</label>
    <br>
    <input type="file" name="risalah" style="padding-left:14;">
  </div>
 
 

  <div class="form-group" style="margin-left:14;">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
      <a href="/jadwal" class="btn btn-danger mb-2">cancel</a>
    </div>



</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
  $('#timepicker').timepicker();
</script>
@endsection

