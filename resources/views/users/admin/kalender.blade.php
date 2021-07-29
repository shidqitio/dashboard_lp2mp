@extends('layouts.admin')

@section('title','Kalender Operasional')

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
                    <div class="card-header">Kalender Operasional</div>


        <div class="card-body">
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#insertdata"
                style="margin-top: 5px">
                Tambah Jadwal
            </button>
            <a href="{{route('kalender.excel')}}" class="btn btn-info" style="margin-top: 5px "> Export excel </a>
            <a href="/eventpage" class="btn btn-success" style="margin-top: 5px "> Kalender </a>

            <br>
            <!-- Modal Insert -->
            <div class="modal fade" id="insertdata"  role="dialog" aria-labelledby="exampleModalTitle"
                aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.65)">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action='/tambahkalender' method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Nama Kegiatan">Nama Kegiatan</label>
                                    <input type="text" class="form-control" name="nama_kegiatan"
                                        placeholder="Nama Kegiatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="Unit" class="">Unit Terlibat</label>
                                    <br />
                                    <select class="form-control multi-select" name="unit[]" multiple="multiple"
                                        style="width: 100%" required>
                                        <option value="Rektor">Rektor</option>
                                        <option value="WR I">WR I</option>
                                        <option value="WR II">WR II</option>
                                        <option value="WR III">WR III</option>
                                        <option value="WR IV">WR IV</option>
                                        <option value="FHISIP">FHISIP</option>
                                        <option value="FKIP">FKIP</option>
                                        <option value="FE">FE</option>
                                        <option value="FST">FST</option>
                                        <option value="PPS">PPS</option>
                                        <option value="BAKP">BAKP</option>
                                        <option value="BKUK">BKUK</option>
                                        <option value="Sekt. LPPMP">Sekt. LPPMP</option>
                                        <option value="PPHIK">PPHIK</option>
                                        <option value="UPT-TIK">UPT-TIK</option>
                                        <option value="PUSJIAN">PUSJIAN</option>
                                        <option value="P2M2">P2M2</option>
                                        <option value="LPPM">PUSJIAN</option>
                                        <option value="PPMP">PPMP</option>
                                        <option value="UPT-PUSLATA">UPT-PUSLATA</option>
                                        <option value="SPI">SPI</option>
                                        <option value="BPPU">BPPU</option>
                                        <option value="ARSIP">ARSIP</option>
                                        <option value="PBB">PBB</option>
                                        <option value="PUSLABA">PUSLABA</option>
                                        <option value="PPMLN">PPMLN</option>
                                        <option value="PRI">PRI</option>
                                        <option value="PK">PK</option>
                                        <option value="UPP">UPP</option>
                                        <option value="UPBJJ">UPBJJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="PJ">Unit Penanggung Jawab</label>
                                    <div class="">
                                        <select class="form-control" id="pj" name="penanggung_jawab" required>
                                            <option value="">--Pilih Unit--</option>
                                            <option value="SEKRETARIAT">SEKRETARIAT</option>
                                            <option value="PUSJIAN">PUSJIAN</option>
                                            <option value="PUSLABA">PUSLABA</option>
                                            <option value="P2M2">P2M2</option>
                                            <option value="PBB">PBB</option>
                                            <option value="PPMP">PPMP</option>
                                            <option value="PASCA">PASCA</option>
                                            <option value="PPMLN">PPMLN</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="color">Warna</label>
                                    <input type="color" class="form-control" id="color" name="color" placeholder="Color"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="Tanggal Mulai">Tanggal Mulai Kegiatan</label>
                                    <input type="date" class="form-control" name="tanggal_mulai" required>
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal Selesai">Tanggal Selesai Kegiatan</label>
                                    <input type="date" class="form-control" name="tanggal_selesai" required>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END MODAL INSERT --}}

            <br>
            @if(count($viewall))
            <div class="table-responsive">
                <table class="table table-bordered bg-dark example1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Unit Terlibat</th>
                            <th>Unit Penanggung Jawab</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1
                        @endphp
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
                        $mo = \Carbon\Carbon::parse($viewalls->tanggal_selesai, 'UTC');
                        $mo = $mo -> format('m');
                        switch($mo){
                        case '01':
                        $b = "Januari";
                        break;

                        case '02':
                        $b = "Februari";
                        break;

                        case '03':
                        $b = "Maret";
                        break;

                        case '04':
                        $b = "April";
                        break;

                        case '05':
                        $b = "Mei";
                        break;

                        case '06':
                        $b = "Juni";
                        break;

                        case '07':
                        $b = "Juli";
                        break;

                        case '08':
                        $b = "Agustus";
                        break;

                        case '09':
                        $b = "September";
                        break;

                        case '10':
                        $b = "Oktober";
                        break;

                        case '11':
                        $b = "November";
                        break;

                        case '12':
                        $b = "Desember";
                        break;

                        default:
                        $b = "Tidak di ketahui";
                        break;
                        }
                        @endphp
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $viewalls->nama_kegiatan }}</td>
                            <td>{{ $viewalls->unit }}</td>
                            <td>{{ $viewalls->penanggung_jawab }}</td>
                            <td>{{ \Carbon\Carbon::parse($viewalls->tanggal_mulai)->format('d') }}-{{ $bulan }}-{{ \Carbon\Carbon::parse($viewalls->tanggal_mulai)->format('Y')}}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($viewalls->tanggal_selesai)->format('d') }}-{{ $b  }}-{{ \Carbon\Carbon::parse($viewalls->tanggal_selesai)->format('Y')}}
                            </td>
                            <td>
                                <button type="button" class="btn-warning btn-sm" data-role="update" data-toggle="modal"
                                    data-id="{{$viewalls->id}}" data-target="#edit_{{$viewalls->id}}"
                                    style="margin: 5px 2px 3px 2px;">
                                    Ubah
                                </button>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn-danger btn-sm" data-toggle="modal"
                                    data-target="#destroy_{{$viewalls->id}}" style="margin: 5px 2px 3px 2px;">
                                    Hapus
                                </button>
                                <!-- Modals for Edit -->
                                <form method="post" action="{{ url('/kalender/update', ['id'=>$viewalls->id] ) }}">
                                    {{ csrf_field() }}
                                    <div class="modal fade" id="edit_{{$viewalls->id}}" data-id="{{$viewalls->id}}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.65)" >
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Kalender">Kalender Operasional</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" class="form-control" id="id_edit" name="id"
                                                        placeholder="Nama Kegiatan" value="{{$viewalls->id}}" hidden>
                                                    <div class="form-group">
                                                        <label for="Nama Kegiatan">Nama Kegiatan</label>
                                                        <input type="text" class="form-control" name="nama_kegiatan"
                                                            placeholder="Nama Kegiatan"
                                                            value="{{$viewalls->nama_kegiatan}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Unit" class="">Unit Terlibat</label>
                                                        <br />
                                                        <select class="form-control select-edit" name="unit[]"
                                                            multiple="multiple" style="width: 100%" required>
                                                            <option value="Rektor">Rektor</option>
                                                            <option value="WR I">WR I</option>
                                                            <option value="WR II">WR II</option>
                                                            <option value="WR III">WR III</option>
                                                            <option value="WR IV">WR IV</option>
                                                            <option value="FHISIP">FHISIP</option>
                                                            <option value="FKIP">FKIP</option>
                                                            <option value="FE">FE</option>
                                                            <option value="FST">FST</option>
                                                            <option value="PPS">PPS</option>
                                                            <option value="BAKP">BAKP</option>
                                                            <option value="BKUK">BKUK</option>
                                                            <option value="Sekt. LPPMP">Sekt. LPPMP</option>
                                                            <option value="PPHIK">PPHIK</option>
                                                            <option value="UPT-TIK">UPT-TIK</option>
                                                            <option value="PUSJIAN">PUSJIAN</option>
                                                            <option value="P2M2">P2M2</option>
                                                            <option value="LPPM">PUSJIAN</option>
                                                            <option value="PPMP">PPMP</option>
                                                            <option value="UPT-PUSLATA">UPT-PUSLATA</option>
                                                            <option value="SPI">SPI</option>
                                                            <option value="BPPU">BPPU</option>
                                                            <option value="ARSIP">ARSIP</option>
                                                            <option value="PBB">PBB</option>
                                                            <option value="PUSLABA">PUSLABA</option>
                                                            <option value="PPMLN">PPMLN</option>
                                                            <option value="PRI">PRI</option>
                                                            <option value="PK">PK</option>
                                                            <option value="UPP">UPP</option>
                                                            <option value="UPBJJ">UPBJJ</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Unit">Unit Penanggung Jawab</label>
                                                        <select id="pj2_{{$viewalls->id}}" class="form-control" name="penanggung_jawab"
                                                            required>
                                                            <option value="{{$viewalls->penanggung_jawab}}">
                                                                {{$viewalls->penanggung_jawab}}</option>
                                                            <option value="SEKRETARIAT">SEKRETARIAT</option>
                                                            <option value="PUSJIAN">PUSJIAN</option>
                                                            <option value="PUSLABA">PUSLABA</option>
                                                            <option value="P2M2">P2M2</option>
                                                            <option value="PBB">PBB</option>
                                                            <option value="PPMP">PPMP</option>
                                                            <option value="PASCA">PASCA</option>
                                                            <option value="PPMLN">PPMLN</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="color">Warna</label>
                                                        <input type="color" class="form-control" id="color2_{{$viewalls->id}}"
                                                            name="color" placeholder="Color"
                                                            value="{{$viewalls->color}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Tanggal Mulai">Tanggal Mulai Kegiatan</label>
                                                        <input type="date" class="form-control" name="tanggal_mulai"
                                                            value="{{$viewalls->tanggal_mulai}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Tanggal Selesai">Tanggal Selesai Kegiatan</label>
                                                        <input type="date" class="form-control" name="tanggal_selesai"
                                                            value="{{$viewalls->tanggal_selesai}}">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-warning">Ubah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                                <!-- END Modals for Edit -->

                            </td>
                        </tr>

                        <!-- Modal For Delete -->
                        <div class="modal fade" id="destroy_{{$viewalls->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="background-color:rgba(0,0,0,0.65)">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Ingin Menghapus Data Ini? <br> "{{$viewalls->nama_kegiatan}}"
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <a id="delete-btn" href="{{url ('/kalender/destroy', ['id'=>$viewalls->id] ) }}"
                                            class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal For Delete -->

                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
        @else
        <H1>Data Tidak Ditemukan</H1>
        @endif
    </div>
</div>


@endsection



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>


<!-- Data Table -->
<script>
    $(document).ready(function () {
        $('.example1').DataTable();
    });
</script>
<!-- --------- -->

{{-- Script --}}
<script>
    $(document).ready(function () {
        $('#pj').on('change', function () {
            if (this.value == "SEKRETARIAT") {
                $("#color").val('#995ffb');
            } else if (this.value == "PUSJIAN") {
                $("#color").val('#bfdc2d');
            } else if (this.value == "PUSLABA") {
                $("#color").val('#fcb944');
            } else if (this.value == "P2M2") {
                $("#color").val('#35bea0');
            } else if (this.value == "PBB") {
                $("#color").val('#f84d81');
            } else if (this.value == "PPMP") {
                $("#color").val('#04630f');
            } else if (this.value == "PASCA") {
                $("#color").val('#9d9d9d');
            } else if (this.value == "PPMLN") {
                $("#color").val('#27b4dd');
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(document).on('click', 'button[data-role=update]', function () {
            var id = $(this).attr('data-id');
            $('#edit_' + id).modal('show');
            $('#pj2_' + id).on('change', function () {
                if (this.value == "SEKRETARIAT") {
                    $("#color2_"+id).val('#995ffb');
                } else if (this.value == "PUSJIAN") {
                    $("#color2_"+id).val('#bfdc2d');
                } else if (this.value == "PUSLABA") {
                    $("#color2_"+id).val('#fcb944');
                } else if (this.value == "P2M2") {
                    $("#color2_"+id).val('#35bea0');
                } else if (this.value == "PBB") {
                    $("#color2_"+id).val('#f84d81');
                } else if (this.value == "PPMP") {
                    $("#color2_"+id).val('#04630f');
                } else if (this.value == "PASCA") {
                    $("#color2_"+id).val('#9d9d9d');
                } else if (this.value == "PPMLN") {
                    $("#color2_"+id).val('#27b4dd');
                }
            });

        });
    });
</script>

<!-- {{-- Select2 --}} -->
<script>
    $(document).ready(function () {
        $('.multi-select').select2({
            placeholder: "select unit" //placeholder
        });
    });
</script>

<!-- {{-- Select2 --}} -->
<script>
    $(document).ready(function() {
        $(document).on('click', 'button[data-role=update]', function() {
            var id = $(this).attr('data-id');
            $('#edit_' + id).modal('show');
            $('.select-edit').select2({
                placeholder : "Isi Data Unit Terlibat"
            });
        });
    });
</script>

