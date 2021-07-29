@extends('layouts.admin')

@section('title','Jadwal Rapat')

@section('container')

@section('contain')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
{{-- Select2 --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

<style type="text/css">
.pagination li{
    list-style-type: none;
    margin : 10px;
}
</style>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Jadwal Rapat Sekretariat LPPMP</div>
					<div class="card-body">
						<a href="/jadwal/create" class="btn btn-primary" style="margin-bottom: 15px ;"> Tambah jadwal </a>

						<a href="{{route('jadwal.excel')}}" class="btn btn-success" style="margin-bottom: 15px ;"> Export excel </a>

						@if (session('status'))
							<div class="alert alert-success">
							{{session('status')}}
							</div>
						@endif

						<table class="table table-hover table-responsive" id="datatable">
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Hari</th>
								<th>Nama Rapat</th>
								<th>Tempat</th>
								<th>Waktu</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<?php $no = 1 ; ?>
							@foreach($jadwals as $jadwal)
	
							@php
								$date = \Carbon\Carbon::parse($jadwal->tanggal, 'UTC');
								$date = $date -> format('l');
            						switch($date){
                    			case 'Sunday':
                        			$hari = "Minggu";
                    			break;

                    			case 'Monday':			
                        			$hari = "Senin";
                    			break;

			                    case 'Tuesday':
            			            $hari = "Selasa";
                    			break;

			                    case 'Wednesday':
            			            $hari = "Rabu";
                    			break;

			                    case 'Thursday':
            			            $hari = "Kamis";
                    			break;

			                    case 'Friday':
            			            $hari = "Jumat";
                    			break;

			                    case 'Saturday':
            			            $hari = "Sabtu";
                    			break;
                    
			                    default:
            			            $hari = "Tidak di ketahui";		
                    			break;
               					}
							@endphp
							<tr>
								<td><?php echo $no++ ?></td>
								<td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
								<td>{{$hari }}</td>
								<td>{{$jadwal -> nama_rapat}}</td>
								<td>{{$jadwal -> tempat}}</td>
								<td>{{$jadwal -> waktu}}</td>
								<td>{{$jadwal -> status}}</td>
								<td>
									<a href="/jadwal/detail/{{$jadwal->id_rapat}}" class="btn btn-secondary" data-toggle="modal" data-target="#detail_{{$jadwal->id_rapat}}">Detail</a>
									<a href="/edit/{{$jadwal->id_rapat}}" class="btn btn-primary">Edit</a>
							
	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroy_{{$jadwal->id_rapat}}">
	Hapus
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="destroy_{{$jadwal->id_rapat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.65)">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  Delete this data - {{$jadwal -> nama_rapat}}
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <a id="delete-btn" href="/jadwal/destroy/{{$jadwal->id_rapat}}" class="btn btn-danger" >Hapus</a>
		</div>
	  </div>
	</div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="detail_{{$jadwal->id_rapat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.65)">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">

		<form method="post">
			<div class="form-group">
				<label for="Tanggal">Tanggal Rapat :</label>
				<br/>
				<div class="col-sm-10">
					@php 
					$tanggal = \Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y');
					@endphp
				<input type="text" class="form-control" id="tanggal" value="{{$tanggal}}" disabled>
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Nama Rapat">Nama Rapat :</label>
				<br/>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nama_rapat" value="{{$jadwal->nama_rapat}}" disabled>
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Tempat">Tempat Rapat :</label>
				<br/>
				<div class="col-sm-10">	
				<input type="text" class="form-control" id="tempat" value="{{$jadwal->tempat}}" disabled>
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Waktu">Waktu Rapat :</label>
				<br/>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="waktu" value="{{$jadwal->waktu}}" disabled>
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Keterangan">Keterangan Rapat :</label>
				<br/>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="keterangan" value="{{$jadwal->keterangan}}" disabled>
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Keterangan">Status Rapat :</label>
				<br/>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="status" value="{{$jadwal->status}}" disabled>
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Undangan" >Download File Undangan</label>
				<div class="col-sm-10">
				<a href="/download/{{ $jadwal->id_rapat }}">{{$jadwal->undangan}}</a>
			
				</div>
			</div>
			<br/><br/>
			<div class="form-group">
				<label for="Risalah" >Download File Risalah </label>
				<div class="col-sm-10">
				<a href="/download/risalah/{{ $jadwal->id_rapat }}">{{$jadwal->risalah}}</a>
			
				</div>
			</div>
	
			<!-- <div class="form-row align-items-center">
				<div class="col-auto my-1">
			<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
			<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
				<option selected>Choose...</option>
				<option value="1">Jadi</option>
				<option value="2">Tunda</option>
				<option value="3">Batal</option>
			</select>
				</div>
			</div> -->
			</form>
							</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>

		</td>
	</tr>
	@endforeach
</table>


{{$jadwals->links()}}
</div>
</div>
</div>
</div>
</div>
<script>

var id_rapat;

$(document).on('click','#ok_button',function(){
	window.open("/jadwal/destroy/"+id_rapat);
})



  
</script>
@endsection

