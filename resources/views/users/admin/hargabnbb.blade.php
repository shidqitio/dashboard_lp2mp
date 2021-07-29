@extends('layouts.admin')

@section('title','Harga Buku')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">



@section('contain')
<div class="main-grid">
<h1>Harga Buku BNBB</h1>

    <div class="form-group col-xl-3">
        <label for="DowloadSKrektor">SK Rektor BNBB</label>
        <br />
        @foreach($harga_bnbb as $i)
        <a href="/download/bnbb/{{$i->id}}" class="btn btn-success">Download {{$i->skrektor_bnbb}} </a>
        @endforeach
    </div>

    <form method="post" action="/harga_buku_bnbb">
        {{ csrf_field() }}

        <div class="form-group col-xl-3">
            <label for="Kode MK">Kode Matakuliah</label>
            <input type="text" class="form-control" name="kode_mk">
        </div>
        <div class="form-group col-xl-3">
            <label for="Edisi">Edisi</label>
            <input type="Number" class="form-control" name="edisi">
        </div>
        <div class="form-group col-xl-3">
            <label for="Matkul">Nama BNBB</label>
            <input type="text" class="form-control" name="nama_bnbb">
        </div>
        <div class="form-group col-xl-3">
            <label for="Biaya Cetak">Jumlah Halaman</label>
            <input type="Number" class="form-control" name="harga_lembar">
        </div>
        <div class="form-group col-xl-3">
            <label for="Biaya Cetak">Penulis</label>
            <select class="form-control" name="penulis">
                <option value="guru_besar">Guru Besar</option>
                <option value="s3">Penulis S3</option>
                <option value="s2">Penulis S2</option>
            </select>
        </div>
        <div class="form-group col-xl-3">
            <label for="Sifat">Buku</label>
            <select class="form-control" name="buku">
                <option value="akademik">Buku Akademik</option>
                <option value="non_akademik">Buku Non Akademik</option>
            </select>
        </div>

        <div class="form-group col-xl-1">
            <button type="submit" class="form-control btn btn-success">Submit</button>
        </div>
    </form>

    <table class="table table-hover table-bordered table-responsive  tblbnbb">
        <thead class="thead-dark">
            <tr>
            <th>No</th>
                <th>Kode MK</th>
                <th>Edisi</th>
                <th>Nama BNBB</th>
                <th>Tanggal Input</th>
                <th>Surat Keterangan</th>
                <th>Jumlah Lembar</th>
                @foreach($harga_bnbb as $bnbb)
                <th>Harga Cetak <br/>Rp.{{$bnbb->biaya_cetak}}</th>
                <th>Pengembangan Materi</th>
                <th>Handling <br/> %{{$bnbb->handling}}</th>
                <th>Desain Layout <br/> %{{$bnbb->desain_layout}}</th>
                <th>Pengadaan <br/> %{{$bnbb->pengadaan}}</th>
                <th>Kendali Mutu <br/> %{{$bnbb->kendali_mutu}}</th>
                <th>Pemeliharaan <br/> %{{$bnbb->pemeliharaan}}</th>
                <th>Bahan Pendukung <br/> %{{$bnbb->bahan_pendukung}}</th>
                <th>Penyimpanan <br/> %{{$bnbb->penyimpanan}}</th>
                <th>Resiko Mutu <br/> %{{$bnbb->resiko_mutu}}</th>
                <th>Harga Total</th>
                <th>action</th>
                @endforeach
            </tr>
        <thead>
        <tbody>
        @php 
        $no = 1
        @endphp
        @foreach($total_bnbb as $total)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$total->kode_mk}}</td>
            <td>{{$total->edisi}}</td>
            <td>{{$total->nama_bnbb}}</td>
            <td>{{$total->tanggal_input}}</td>
            <td>{{$total->surat_keterangan}}</td>
            <td>{{$total->jumlah_lembar}}</td>
            <td><?php $hasil = $total->biaya_cetak;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->pengembangan_materi;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->handling;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->desain_layout;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->pengadaan;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->kendali_mutu;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->pemeliharaan;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->bahan_pendukung;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->penyimpanan;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->resiko_mutu;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>
            <td><?php $hasil = $total->harga_total;
                $number = number_format($hasil, 2, ",", ".");
                echo $number;
                ?></td>   
            <td> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#destroy_{{$total->id}}">
                    Hapus
                </button>
            </td>
            <!-- Modal For Delete -->
            <div class="modal fade" id="destroy_{{$total->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Delete this data - {{$total->nama_bnbb}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a id="delete-btn" href="{{url('/harga_bnbb/destroy', ['id'=>$total->id] ) }}" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Delete -->
        </tr>
        @endforeach
        </tbody>
    </table>



</div>


@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>

<script>
    $(document).ready(function() {
        $('.tblbnbb').DataTable();
    });
</script>