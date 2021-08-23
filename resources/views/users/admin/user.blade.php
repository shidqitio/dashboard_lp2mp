
@extends('layouts.admin')

@section('title','tableuser')

@section('container')

@section('contain')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">User Privileges</div>
                    <div class="card-body">
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
        </div>
    </div>
</div>

@endsection