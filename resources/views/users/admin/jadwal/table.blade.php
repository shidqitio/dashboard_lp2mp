<table  >
    <thead >
    <tr >
        <th>No</th>
        <th>Tanggal</th>
        <th>Hari</th>
        <th>Nama Rapat</th>
        <th>Tempat</th>
        <th>Waktu</th>
        <th>Keterangan</th>
      
    </tr>
</thead>
    <?php $no = 1 ; ?>
    @foreach($jadwal as $jadwal)
    
    @php
        $date = \Carbon\Carbon::parse($jadwal->tanggal, 'UTC');
        
    @endphp      
        <tr>
        <td><?php echo $no++ ?></td>
        <td>{{\Carbon\Carbon::parse($jadwal->tanggal)->format('d/m/Y')}}</td>
        <td>{{$date -> Format('l') }}</td>
        <td>{{$jadwal -> nama_rapat}}</td>
        <td>{{$jadwal -> tempat}}</td>
        <td>{{$jadwal -> waktu}}</td>
        <td>{{$jadwal -> keterangan}}</td>
       
        </tr>    
        @endforeach
</table>
      