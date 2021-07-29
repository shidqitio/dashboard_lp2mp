@extends('layouts.admin')

@section('title','Harga Buku')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">



@section('contain')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Harga Buku </div>

                        <div class="form-group col-xl-3">
                            <label for="DowloadSKrektor">SK Rektor</label>
                            <br />
                            @foreach($skrektorBAC as $i)
                            <a href="/download/coba/{{$i->id}}" class="btn btn-success">Download {{$i->skrektor_BA}} </a>
                            @endforeach
                        </div>

                        <form method="post" action="/harga_buku">
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
                                <label for="Matkul">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" name="matkul">
                            </div>
                            <div class="form-group col-xl-3">
                                <label for="Biaya Cetak">Harga Per Halaman</label>
                                <input type="Number" class="form-control" name="harga_lembar">
                            </div>

                            <div class="form-group col-xl-1">
                                <button type="submit" class="form-control btn btn-success">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
            <div class="card-body">
    <ul class="nav nav-pills mb-3" style=" margin-left:28%;" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#bacmhsut" role="tab" aria-controls="pills-home" aria-selected="true">BAC MHS UT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#bacnonut" role="tab" aria-controls="pills-profile" aria-selected="false">BAC MHS NON UT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#bacmhsmitra" role="tab" aria-controls="pills-profile" aria-selected="false">BAC MHS MITRA UT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#bacnonmhsmitra" role="tab" aria-controls="pills-profile" aria-selected="false">BAC NON MHS MITRA UT</a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="bacmhsut" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table table-hover table-bordered table-responsive  myTable">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>KodeMk.Edisi </th>
                        <th>Kode MK</th>
                        <th>Edisi</th>
                        <th>Judul Mata Kuliah</th>
                        <th>Tanggal Input</th>
                        <th>Surat Keterangan</th>
                        <th>Jumlah Halaman</th>
                        @foreach($cetak as $cetak)
                        <th>Harga Cetak <br />Rp. {{$cetak->biaya_cetak}} </th>
                        @endforeach
                        @foreach($handling as $handling)
                        <th>Handling di UT <br /> % {{$handling->handling}}</th>
                        @endforeach
                        @foreach($design as $design)
                        <th>Design dan Layout <br /> % {{$design->designlayout}}</th>
                        @endforeach
                        @foreach($pengadaan as $pengadaan)
                        <th>Pengadaan <br /> % {{$pengadaan->pengadaan}}</th>
                        @endforeach
                        @foreach($mutu as $mutu)
                        <th>Kendali Mutu <br /> % {{$mutu->kendali_mutu}}</th>
                        @endforeach
                        @foreach($pemeliharaan as $pemeliharaan)
                        <th>Pemeliharaan <br /> % {{$pemeliharaan->pemeliharaan}}</th>
                        @endforeach
                        <th>Harga Pokok</th>
                        @foreach($pendukung as $pendukung)
                        <th>Pendukung <br /> % {{$pendukung->pendukung}}</th>
                        @endforeach
                        @foreach($resiko_penyimpanan as $resiko_penyimpanan)
                        <th>Resiko Penyimpanan <br />% {{$resiko_penyimpanan->resiko}}</th>
                        @endforeach
                        @foreach($resiko_mutu as $resiko_mutu)
                        <th>Resiko Mutu <br /> % {{$resiko_mutu->resiko_mutu}}</th>
                        @endforeach
                        <th>Harga Jual Kotor</th>
                        <th>Harga Mahasiswa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1
                    @endphp
                    @foreach($harga_buku as $harga)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$harga->kode_mk}}.{{$harga->edisi}}</td>
                        <td>{{$harga->kode_mk}}</td>
                        <td>{{$harga->edisi}}</td>
                        <td>{{$harga->judul_matakuliah}}</td>
                        <td>{{$harga->tanggal_input}}</td>
                        <td>{{$harga->surat_keterangan}}</td>
                        <td>{{$harga->harga_lembar}}</td>
                        <td><?php $hasil = $harga->biaya_cetak;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->handling;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->design;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->pengadaan;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->kendali_mutu;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->pemeliharaan;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->harga_pokok;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->pendukung;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->resiko_penyimpanan;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->resiko_mutu;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->harga_kotor;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $harga->harga_mahasiswa;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#destroy_{{$harga->id_harga}}">
                                Hapus
                            </button>
                        </td>

                        <!-- Modal For Delete -->
                        <div class="modal fade" id="destroy_{{$harga->id_harga}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Delete this data - {{$harga->judul_matakuliah}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a id="delete-btn" href="{{url ('/harga_buku/destroy', ['id'=>$harga->id_harga] ) }}" class="btn btn-danger">Hapus</a>
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
        <div class="tab-pane fade" id="bacnonut" role="tabpanel" aria-labelledby="pills-profile-tab">
            <table class="table table-hover table-bordered table-responsive myTable">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>KodeMk.Edisi </th>
                        <th>Kode MK</th>
                        <th>Edisi</th>
                        <th>Judul Mata Kuliah</th>
                        <th>Harga Mahasiswa</th>
                        @foreach ($pengembanganmateri as $materi)
                        <th>Pengembangan Materi <br /> % {{$materi->pengembangan_materi}}</th>
                        @endforeach
                        @foreach ($pengembangan as $pengembang)
                        <th>Pengembangan <br /> % {{$pengembang->pengembang}}</th>
                        @endforeach
                        @foreach ($produkba as $produkba)
                        <th>Produk si BA <br /> % {{$produkba->produk_ba}}</th>
                        @endforeach
                        @foreach ($gudangba as $gudangba)
                        <th>Pergudangan BA<br /> % {{$gudangba->gudang_ba}}</th>
                        @endforeach
                        <th>Harga Jual</th>
                        @foreach ($royalti as $royalti)
                        <th>Royalti <br /> % {{$royalti->royalti}}</th>
                        @endforeach
                        <th>Harga Kotor</th>
                        <th>Harga non Mahasiswa</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1
                    @endphp
                    @foreach($harga_nonmhs as $har)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$har->kode_mk}}.{{$har->edisi}}</td>
                        <td>{{$har->kode_mk}}</td>
                        <td>{{$har->edisi}}</td>
                        <td>{{$har->judul_matakuliah}}</td>
                        <td><?php $hasil = $har->harga_mahasiswa;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->pengembangan_materi;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->pengembang;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->produk_ba;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->pergudangan_ba;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->harga_jual;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->royalti;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->harga_kotor;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                        <td><?php $hasil = $har->harga_nonmhs;
                            $number = number_format($hasil, 2, ",", ".");
                            echo $number;
                            ?></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

        <div class="tab-pane fade" id="bacmhsmitra" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="table-responsive">
                <table class="table table-hover table-bordered   myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>KodeMk.Edisi </th>
                            <th>Kode MK</th>
                            <th>Edisi</th>
                            <th>Judul Mata Kuliah</th>
                            <th>Harga Mahasiswa</th>
                            <th>Mitra</th>
                            <th>Harga Kotor</th>
                            <th>Harga Mitra Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach($harga_mhs_mitra as $har)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$har->kode_mk}}.{{$har->edisi}}</td>
                            <td>{{$har->kode_mk}}</td>
                            <td>{{$har->edisi}}</td>
                            <td>{{$har->judul_matakuliah}}</td>
                            <td><?php $hasil = $har->harga_mahasiswa;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                            <td><?php $hasil = $har->mitra;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                            <td><?php $hasil = $har->harga_kotor;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                            <td><?php $hasil = $har->bac_mhs_mitra;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="bacnonmhsmitra" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="table-responsive">
                <table class="table table-hover table-bordered  myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>KodeMk.Edisi </th>
                            <th>Kode MK</th>
                            <th>Edisi</th>
                            <th>Judul Mata Kuliah</th>
                            <th>Harga Mahasiswa</th>
                            <th>Mitra</th>
                            <th>Harga Kotor</th>
                            <th>Harga Mitra Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach($harga_nonmhs_mitra as $har)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$har->kode_mk}}.{{$har->edisi}}</td>
                            <td>{{$har->kode_mk}}</td>
                            <td>{{$har->edisi}}</td>
                            <td>{{$har->judul_matakuliah}}</td>
                            <td><?php $hasil = $har->harga_nonmhs;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                            <td><?php $hasil = $har->mitra_nonmhs;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                            <td><?php $hasil = $har->harga_kotor;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                            <td><?php $hasil = $har->harga_bac_nonmhs_mitra;
                                $number = number_format($hasil, 2, ",", ".");
                                echo $number;
                                ?></td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>




@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>

<script>
    $(document).ready(function() {
        $('.myTable').DataTable();
    });
</script>