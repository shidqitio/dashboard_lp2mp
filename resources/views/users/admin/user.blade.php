
@extends('layouts.admin')

@section('title','tableuser')

@section('container')

@section('contain')
<div class="main-grid">
			
    <h2 style="align-center">Jadwal Rapat Sekretariat LPPMP </h2>
    <a href="/createuser" class="btn btn-primary" style="margin-bottom: 15px ;"> Tambah User </a>
    <div class="agile-grids">	
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Privillage</th>
            
          </tr>
        </thead>
        <tbody>
            @php
              $no = 1 ;  
            @endphp
            @foreach($user as $users)
            <tr>
            <td style="text-align:center">{{ $no++ }}</td>
            <td style="text-align:center">{{ $users->name }}</td>
            <td style="text-align:center">{{ $users->email }}</td>
            <td style="text-align:center">{{ $users->role_name }}</td>
          </tr>
         
        </tbody>
        @endforeach
      </table>
    </div>
</div>
@endsection