@extends('layouts.admin')

@section('title','stok item')

@section('container')

@section('contain')

<div class="main-grid">
			
    <h2 style="align-center">Stok Item dan Paket </h2>
    
    <div class="agile-grids">	
    <table class="table table-bordered table-responsive-sm">
        <thead>
          <tr>
            <th>No</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Edisi</th>
            <th scope="col">Stok Item Puslaba</th>
            <th scope="col">Stok Paket Puslaba</th>
            
          </tr>
        </thead>
        <tbody>
            @php
              $no = 1 ;  
            @endphp
            @foreach($stokitempaket as $stok)
            <tr>
            <td style="text-align:center">{{ $no++ }}</td>
            <td style="text-align:center">{{ $stok->kode_barang }}</td>
            <td style="text-align:center">{{ $stok->nama_barang }}</td>
            <td style="text-align:center">{{ $stok->edisi }}</td>
            <td style="text-align:center">{{ $stok->saldo_akhir_item }}</td>
            <td style="text-align:center">{{ $stok->saldo_akhir_paket }}</td>
            
          </tr>
         
        </tbody>
        @endforeach
      </table>
    </div>
</div>


@endsection