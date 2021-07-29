<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Unit</th>
            <th>Penanggung Jawab</th>
            <th>tanggal mulai</th>
            <th>tanggal selesai</th>
        </tr>
    </thead>
    <?php $no = 1; ?>

    @foreach ($viewall as $viewalls)

    @php
    $month = \Carbon\Carbon::parse($viewalls->tanggal_mulai, 'UTC');
    $month = $month -> format('m');
    switch($month){
    case '01':
    $bulan = "Januari";
    break;

    case '02':
    $bulan = "Februari";
    break;

    case '03':
    $bulan = "Maret";
    break;

    case '04':
    $bulan = "April";
    break;

    case '05':
    $bulan = "Mei";
    break;

    case '06':
    $bulan = "Juni";
    break;

    case '07':
    $bulan = "Juli";
    break;

    case '08':
    $bulan = "Agustus";
    break;

    case '09':
    $bulan = "September";
    break;

    case '10':
    $bulan = "Oktober";
    break;

    case '11':
    $bulan = "November";
    break;

    case '12':
    $bulan = "Desember";
    break;

    default:
    $bulan = "Tidak di ketahui";
    break;
    }
    @endphp

    @php
    $month = \Carbon\Carbon::parse($viewalls->tanggal_selesai, 'UTC');
    $month = $month -> format('m');
    switch($month){
    case '01':
    $bulan = "Januari";
    break;

    case '02':
    $bulan = "Februari";
    break;

    case '03':
    $bulan = "Maret";
    break;

    case '04':
    $bulan = "April";
    break;

    case '05':
    $bulan = "Mei";
    break;

    case '06':
    $bulan = "Juni";
    break;

    case '07':
    $bulan = "Juli";
    break;

    case '08':
    $bulan = "Agustus";
    break;

    case '09':
    $bulan = "September";
    break;

    case '10':
    $bulan = "Oktober";
    break;

    case '11':
    $bulan = "November";
    break;

    case '12':
    $bulan = "Desember";
    break;

    default:
    $bulan = "Tidak di ketahui";
    break;
    }
    @endphp

    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $viewalls->nama_kegiatan }}</td>
        <td>{{ $viewalls->unit }}</td>
        <td>{{ $viewalls->penanggung_jawab }}</td>
        <td>{{ \Carbon\Carbon::parse($viewalls->tanggal_mulai)->format('d') }}-{{ $bulan  }}-{{ \Carbon\Carbon::parse($viewalls->tanggal_mulai)->format('Y')}}</td>
        <td>{{ \Carbon\Carbon::parse($viewalls->tanggal_selesai)->format('d') }}-{{ $bulan  }}-{{ \Carbon\Carbon::parse($viewalls->tanggal_selesai)->format('Y')}}</td>
    </tr>
    @endforeach
</table>