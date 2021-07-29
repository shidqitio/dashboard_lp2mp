@extends('layouts.admin')

@section('title','stok item paket 2')

@section('container')

@section('contain')


<div class="container">
    <div class="main-grid">
			
        <h2 style="align-center">Stok Item dan Paket </h2>
        
        <div class="agile-grids">
            <h4 style="align-center">Stok Item dan Paket di Bawah 300</h2>
                
        <table id='bawah' class="table table-bordered table-responsive-sm " style="color:#fa6e6e; background-color:#474646;">
            <thead>
              <tr>
                <th class="col-xs-3">No</th>
                <th class="col-xs-3">Kode Barang</th>
                <th class="col-xs-3">Nama Barang</th>
                <th class="col-xs-3">Edisi</th>
                <th class="col-xs-3">Stok Item Puslaba</th>
                <th class="col-xs-3">Stok Paket Puslaba</th>
                
              </tr>
            </thead>
            <tbody>
                @php
                  $no = 1 ;  
                @endphp
                @foreach($stokbawah300 as $stok)
                <tr>
                    <td class="col-xs-3" style="text-align:center">{{ $no++ }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->kode_barang }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->nama_barang }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->edisi }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->saldo_akhir_item }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->saldo_akhir_paket }}</td>
              </tr>
             
            </tbody>
            @endforeach
          </table>
        
        </div>

        <div class="agile-grids">
        	<h4 style="align-center">Stok Item dan Paket 300 sampai 500</h2>
        <table id='bawah' class="table table-bordered table-responsive-sm" style="color:#ffc908; background-color:#474646;">
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
                @foreach($stokantara as $stok)
                <tr>
                    <td class="col-xs-3" style="text-align:center">{{ $no++ }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->kode_barang }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->nama_barang }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->edisi }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->saldo_akhir_item }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->saldo_akhir_paket }}</td>
              </tr>
             
            </tbody>
            @endforeach
          </table>
        </div>

        <div class="agile-grids">
        	<h4 style="align-center">Stok Item dan Paket di atas 500</h2>
        <table id='bawah' class="table table-bordered table-responsive-sm" style="color:#7aff81; background-color:#474646;">
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
                @foreach($stoklebih500 as $stok)
                <tr>
                    <td class="col-xs-3" style="text-align:center">{{ $no++ }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->kode_barang }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->nama_barang }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->edisi }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->saldo_akhir_item }}</td>
                    <td class="col-xs-3" style="text-align:center">{{ $stok->saldo_akhir_paket }}</td>
              </tr>
             
            </tbody>
            @endforeach
          </table>
        </div>
    </div>
</div>


@endsection