@extends('layouts.admin')

@section('title','Rencana Jadwal Rapat')

@section('container')

@section('contain')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
{{-- Select2 --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

<style>
    .pagination {
        position: fixed;
    }
</style>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Jadwal Rapat Sekretariat LPPMP</div>
                    <table class="table"  >
                        <thead class="bg-primary ">
                        <tr class=" col-md-12" style="background-color:#DCDCDC">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Hari</th>
                            <th>Nama Rapat</th>
                            <th>Tempat</th>
                            <th>Waktu</th>
                            <th>Status</th>
                        </tr>
                        </thead>
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
            
            @if($jadwal -> status == "Draft")
            
            <tr class="col-md-12" style="background-color : #b3f8fc ">
            <td><?php echo $no++ ?></td>
            <td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
            <td>{{$hari }}</td>
            <td>{{$jadwal -> nama_rapat}}</td>
            <td>{{$jadwal -> tempat}}</td>
            <td>{{$jadwal -> waktu}}</td>
            <td>{{$jadwal -> status}}</td>
            </tr>

            @elseif($jadwal -> status == "Jadi")
            
            <tr class="col-md-12" style="background-color : #edffd6 ">
            <td><?php echo $no++ ?></td>
            <td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
            <td>{{$hari }}</td>
            <td>{{$jadwal -> nama_rapat}}</td>
            <td>{{$jadwal -> tempat}}</td>
            <td>{{$jadwal -> waktu}}</td>
            <td>{{$jadwal -> status}}</td>
            </tr>
            
            @elseif($jadwal -> status == "Tunda")

            <tr class="col-md-12" style="background-color : #8accff ">
                <td><?php echo $no++ ?></td>
                <td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
                <td>{{$hari }}</td>
                <td>{{$jadwal -> nama_rapat}}</td>
                <td>{{$jadwal -> tempat}}</td>
                <td>{{$jadwal -> waktu}}</td>
                <td>{{$jadwal -> status}}</td>
                </tr>

            @elseif($jadwal -> status == "Selesai")

            <tr class="col-md-12">
                <td><?php echo $no++ ?></td>
                <td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
                <td>{{$hari }}</td>
                <td>{{$jadwal -> nama_rapat}}</td>
                <td>{{$jadwal -> tempat}}</td>
                <td>{{$jadwal -> waktu}}</td>
                <td>{{$jadwal -> status}}</td>
                </tr>

            @else
            
            
            <tr class="col-md-12" style="background-color : #ff6e6e ">
                <td><?php echo $no++ ?></td>
                <td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
                <td>{{$hari }}</td>
                <td>{{$jadwal -> nama_rapat}}</td>
                <td>{{$jadwal -> tempat}}</td>
                <td>{{$jadwal -> waktu}}</td>
                <td>{{$jadwal -> status}}</td>
                </tr>


            @endif
           @endforeach
            </div>
            </div>
        </div>
    </div>
    </table>
    </div>
</div>

    {{$jadwals->links()}}
    @endsection