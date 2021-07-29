@extends('layouts.admin')


@section('title','Rencana Jadwal Rapat')

@section('container')

@section('contain')
<style type="text/css">
.pagination li{
    list-style-type: none;
    margin : 10px;
}
</style>

<div class="container">
    <h2 style="margin-left:250px">Jadwal Rapat Sekretariat LPPMP </h2>

    
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
    </table>

    {{$jadwals->links()}}
    @endsection