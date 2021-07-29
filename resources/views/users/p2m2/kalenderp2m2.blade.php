@extends('users.pbb.layout.sidebar2')

@section('title','Kalender')

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

<div class="modal-body">
    <div class="card">
        <div class="card-header">
            Kalender Operasional
        </div>

        <!-- <form action="kalender" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="container">
            <div class="row">
                <label for="from" class="col-form-label">Mulai</label>
                <div class="col-md-2">
                    <input type="date" class="form-control input-sm" id="from" name='from'>
                </div>
                <label for="from" class="col-form-label">Selesai</label>
                <div class="col-md-2">
                    <input type="date" class="form-control input-sm" id="to" name='to'>
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-sm" name="search">Search</button>
                </div>
            </div>
        </div>
    </form> -->
        <!-- Button trigger modal insert -->
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#insertdata" style="margin-top: 5px">
                Tambah Jadwal
            </button>
            <a href="{{route('kalender.excel')}}" class="btn btn-info" style="margin-top: 5px "> Export excel </a>
            <a href="/eventpagep2m2" class="btn btn-success" style="margin-top: 5px "> Kalender </a>

            <br>
            <!-- Modal Insert -->
            <div class="modal fade" id="insertdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
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
                                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="Unit" class="">Unit Terlibat</label>
                                    <br />
                                    <select class="form-control multi-select" name="unit[]" multiple="multiple" style="width: 100%" required>
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
                                    <input type="color" class="form-control" id="color" name="color" placeholder="Color" required>
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
            @if(count($kalender))
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
                        @foreach ($kalender as $kalenders)

                        @php
                        $month = \Carbon\Carbon::parse($kalenders->tanggal_mulai, 'UTC');
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
                        $mo = \Carbon\Carbon::parse($kalenders->tanggal_selesai, 'UTC');
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
                            <td>{{ $kalenders->nama_kegiatan }}</td>
                            <td>{{ $kalenders->unit }}</td>
                            <td>{{ $kalenders->penanggung_jawab }}</td>
                            <td>{{ \Carbon\Carbon::parse($kalenders->tanggal_mulai)->format('d') }}-{{ $bulan }}-{{ \Carbon\Carbon::parse($kalenders->tanggal_mulai)->format('Y')}}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($kalenders->tanggal_selesai)->format('d') }}-{{ $b  }}-{{ \Carbon\Carbon::parse($kalenders->tanggal_selesai)->format('Y')}}
                            </td>
                            <td>
                                @if($kalenders->penanggung_jawab == auth()->user()->role )
                                <button type="button" class="btn-warning btn-sm" data-role="update" data-toggle="modal" data-id="{{$kalenders->id}}" data-target="#edit_{{$kalenders->id}}" style="margin: 5px 2px 3px 2px;">
                                    Ubah
                                </button>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn-danger btn-sm" data-toggle="modal" data-target="#destroy_{{$kalenders->id}}" style="margin: 5px 2px 3px 2px;">
                                    Hapus
                                </button>
                                @endif
                                <!-- Modals for Edit -->
                                <form method="post" action="{{ url('/kalender/update', ['id'=>$kalenders->id] ) }}">
                                    {{ csrf_field() }}
                                    <div class="modal fade" id="edit_{{$kalenders->id}}" data-id="{{$kalenders->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Kalender">Kalender Operasional</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" class="form-control" id="id_edit" name="id" placeholder="Nama Kegiatan" value="{{$kalenders->id}}" hidden>
                                                    <div class="form-group">
                                                        <label for="Nama Kegiatan">Nama Kegiatan</label>
                                                        <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{$kalenders->nama_kegiatan}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Unit" class="">Unit Terlibat</label>
                                                        <br />
                                                        <select class="form-control select-edit" name="unit[]" multiple="multiple" style="width: 100%" required>
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
                                                        <select id="unit2" class="form-control" name="penanggung_jawab" required>
                                                            <option value="{{$kalenders->penanggung_jawab}}">
                                                                {{$kalenders->penanggung_jawab}}
                                                            </option>
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
                                                        <input type="color" class="form-control" id="color2" name="color" placeholder="Color" value="{{$kalenders->color}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Tanggal Mulai">Tanggal Mulai Kegiatan</label>
                                                        <input type="date" class="form-control" name="tanggal_mulai" value="{{$kalenders->tanggal_mulai}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Tanggal Selesai">Tanggal Selesai Kegiatan</label>
                                                        <input type="date" class="form-control" name="tanggal_selesai" value="{{$kalenders->tanggal_selesai}}">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
                        <div class="modal fade" id="destroy_{{$kalenders->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Ingin Menghapus Data Ini? <br> "{{$kalenders->nama_kegiatan}}"
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a id="delete-btn" href="{{url ('/kalender/destroy', ['id'=>$kalenders->id] ) }}" class="btn btn-danger">Hapus</a>
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


        @else
        <H1>Data Tidak Ditemukan</H1>
        @endif
    </div>
</div>


@endsection



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>


<!-- Data Table -->
<script>
    $(document).ready(function() {
        $('.example1').DataTable();
    });
</script>
<!-- --------- -->

{{-- Script --}}
<script>
    $(document).ready(function() {
        $('#pj').on('change', function() {
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
    $(document).ready(function() {
        $(document).on('click', 'button[data-role=update]', function() {
            var id = $(this).attr('data-id');
            $('#edit_' + id).modal('show');
            $('#unit2').on('change', function(id) {
                if (this.value == "SEKRETARIAT") {
                    $("#color2").val('#995ffb');
                } else if (this.value == "PUSJIAN") {
                    $("#color2").val('#bfdc2d');
                } else if (this.value == "PUSLABA") {
                    $("#color2").val('#fcb944');
                } else if (this.value == "P2M2") {
                    $("#color2").val('#35bea0');
                } else if (this.value == "PBB") {
                    $("#color2").val('#f84d81');
                } else if (this.value == "PPMP") {
                    $("#color2").val('#04630f');
                } else if (this.value == "PASCA") {
                    $("#color2").val('#9d9d9d');
                } else if (this.value == "PPMLN") {
                    $("#color2").val('#27b4dd');
                }
            });

        });
    });
</script>

<!-- {{-- Select2 --}} -->
<script>
    $(document).ready(function() {
        $('.multi-select').select2({
            placeholder: "select unit" //placeholder
        });
    });
</script>

<!-- {{-- Select2 --}} -->
<script>
    $(document).ready(function() {
        $('.select-edit').select2();
    });
</script>