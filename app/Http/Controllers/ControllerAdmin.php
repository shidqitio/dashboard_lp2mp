<?php

namespace App\Http\Controllers;

use App\Harga_Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Alert;
use App\Harga_Bac_Mitra;
use App\Harga_Buku_Nonmhs;
use App\Harga_Nonmhs_Mitra;
use App\sk_rektor;
use File;

class ControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function viewsetharga()
    {
        $skrektorBAC = DB::table('sk_rektor')->get();
        $cetak = DB::table('biaya_cetak')->get();
        $handling = DB::table('handling')->get();
        $pengadaan = DB::table('pengadaan')->get();
        $design = DB::table('designlayout')->get();
        $pemeliharaan = DB::table('pemeliharaan')->get();
        $mutu = DB::table('kendali_mutu')->get();
        $pendukung = DB::table('pendukung')->get();
        $resiko_penyimpanan = DB::table('resiko_penyimpanan')->get();
        $resiko_mutu = DB::table('resiko_mutu')->get();
        $mitra = DB::table('mitra')->get();
        $mitra_nonmhs = DB::table('mitra_nonmhs')->get();
        $pengembanganmateri = DB::table('pengembangan_materi')->get();
        $pengembangan = DB::table('pengembang')->get();
        $produkba = DB::table('produk_ba')->get();
        $gudangba = DB::table('pergudangan_ba')->get();
        $royalti = DB::table('royalti')->get();
        return view('users.admin.sethargamaster')->with(compact(
            'skrektorBAC',
            'cetak',
            'handling',
            'pengadaan',
            'design',
            'pemeliharaan',
            'mutu',
            'pendukung',
            'resiko_penyimpanan',
            'resiko_mutu',
            'mitra',
            'mitra_nonmhs',
            'pengembanganmateri',
            'pengembangan',
            'produkba',
            'gudangba',
            'royalti'
        ));
    }

    public function updatesetharga(Request $request)
    {
        if ($request->has('skrektorBAC1')) {
            //hapus pdf skrektorbac
            $skrektorBAC = sk_rektor::where('id', $request->id)->first();
            File::delete(storage_path() . '/app/pdf/skrektorBA/' . $skrektorBAC->skrektor_BA);

            //upload 
            $filenametext = $request->file('skrektorBAC')->getClientOriginalName();
            $filename = $filenametext;
            $path = $request->file('skrektorBAC')->storeAs('pdf/skrektorBA', $filename);

            //database
            DB::table('sk_rektor')->where('id', $request->id)->update([
                'skrektor_BA' => $request->skrektorBAC = $filename
            ]);
        } else if ($request->has('cetak1')) {
            DB::table('biaya_cetak')->where('id_cetak', $request->id)->update([
                'biaya_cetak' => $request->biaya_cetak
            ]);
        } else if ($request->has('handling1')) {
            DB::table('handling')->where('id_handling', $request->id)->update([
                'handling' => $request->handling
            ]);
        } else if ($request->has('pengadaan1')) {
            DB::table('pengadaan')->where('id_pengadaan', $request->id)->update([
                'pengadaan' => $request->pengadaan
            ]);
        } else if ($request->has('mutu1')) {
            DB::table('kendali_mutu')->where('id_mutu', $request->id)->update([
                'kendali_mutu' => $request->mutu
            ]);
        } else if ($request->has('pemeliharaan1')) {
            DB::table('pemeliharaan')->where('id_pemeliharaan', $request->id)->update([
                'pemeliharaan' => $request->pemeliharaan
            ]);
        } else if ($request->has('pendukung1')) {
            DB::table('pendukung')->where('id_pendukung', $request->id)->update([
                'pendukung' => $request->pendukung
            ]);
        } else if ($request->has('resiko_penyimpanan1')) {
            DB::table('resiko_penyimpanan')->where('id_resiko', $request->id)->update([
                'resiko' => $request->resiko_penyimpanan
            ]);
        } else if ($request->has('resiko_mutu1')) {
            DB::table('resiko_mutu')->where('id_resikomutu', $request->id)->update([
                'resiko_mutu' => $request->resiko_mutu
            ]);
        } else if ($request->has('mitra1')) {
            DB::table('mitra')->where('id', $request->id)->update([
                'mitra' => $request->mitra
            ]);
        } else if ($request->has('pengembangan_materi1')) {
            DB::table('pengembangan_materi')->where('id', $request->id)->update([
                'pengembangan_materi' => $request->pengembangan_materi
            ]);
        } else if ($request->has('pengembangan1')) {
            DB::table('pengembang')->where('id', $request->id)->update([
                'pengembang' => $request->pengembangan
            ]);
        } else if ($request->has('produkba1')) {
            DB::table('produk_ba')->where('id', $request->id)->update([
                'produk_ba' => $request->produkba
            ]);
        } else if ($request->has('gudangba1')) {
            DB::table('pergudangan_ba')->where('id', $request->id)->update([
                'gudang_ba' => $request->gudangba
            ]);
        } else if ($request->has('royalti1')) {
            DB::table('royalti')->where('id', $request->id)->update([
                'royalti' => $request->royalti
            ]);
        } else if ($request->has('mitra_nonmhs1')) {
            DB::table('mitra_nonmhs')->where('id', $request->id)->update([
                'mitra_nonmhs' => $request->mitra_nonmhs
            ]);
        }


        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect('/setmasterharga');
    }

    public function viewharga()
    {
        $skrektorBAC = DB::table('sk_rektor')->get();
        $cetak = DB::table('biaya_cetak')->get();
        $handling = DB::table('handling')->get();
        $pengadaan = DB::table('pengadaan')->get();
        $design = DB::table('designlayout')->get();
        $pemeliharaan = DB::table('pemeliharaan')->get();
        $mutu = DB::table('kendali_mutu')->get();
        $harga_buku = DB::table('harga_buku')->orderBy('id_harga','desc')->get();
        $pendukung = DB::table('pendukung')->get();
        $resiko_penyimpanan = DB::table('resiko_penyimpanan')->get();
        $resiko_mutu = DB::table('resiko_mutu')->get();
        $pengembanganmateri = DB::table('pengembangan_materi')->get();
        $pengembangan = DB::table('pengembang')->get();
        $produkba = DB::table('produk_ba')->get();
        $gudangba = DB::table('pergudangan_ba')->get();
        $royalti = DB::table('royalti')->get();
        $mitra = DB::table('mitra')->get();
        $mitra_nonmhs = DB::table('mitra_nonmhs')->get();
        $harga_nonmhs = DB::table('harga_buku_nonmhs')
            ->select('harga_buku_nonmhs.*', 'harga_buku.kode_mk', 'harga_buku.edisi', 'harga_buku.judul_matakuliah', 'harga_buku.harga_mahasiswa')
            ->join('harga_buku', 'harga_buku.id_harga', '=', 'harga_buku_nonmhs.id_bac_mhs')
            ->orderBy('id','desc')
            ->get();
        $harga_mhs_mitra = DB::table('harga_mhs_mitra')
            ->select('harga_mhs_mitra.*',  'harga_buku.kode_mk', 'harga_buku.edisi', 'harga_buku.judul_matakuliah', 'harga_buku.harga_mahasiswa')
            ->join('harga_buku', 'harga_buku.id_harga', '=', 'harga_mhs_mitra.id_bac_mhs')
            ->orderBy('id','desc')
            ->get();
        $harga_nonmhs_mitra = DB::table('harga_nonmhs_mitra')
            ->select('harga_nonmhs_mitra.*',  'harga_buku.kode_mk', 'harga_buku.edisi', 'harga_buku.judul_matakuliah', 'harga_buku_nonmhs.harga_nonmhs')
            ->join('harga_buku_nonmhs', 'harga_buku_nonmhs.id', '=', 'harga_nonmhs_mitra.id_bac_nonmhs')
            ->join('harga_buku', 'harga_buku.id_harga', '=', 'harga_buku_nonmhs.id_bac_mhs')
            ->orderBy('id','desc')
            ->get();
        return view('users.admin.harga')->with(compact(
            'skrektorBAC',
            'cetak',
            'handling',
            'pengadaan',
            'design',
            'pemeliharaan',
            'mutu',
            'harga_buku',
            'pendukung',
            'resiko_penyimpanan',
            'resiko_mutu',
            'pengembanganmateri',
            'pengembangan',
            'produkba',
            'gudangba',
            'royalti',
            'harga_nonmhs',
            'mitra',
            'harga_mhs_mitra',
            'harga_nonmhs_mitra'
        ));
    }



    public function hitung_harga(Request $request)
    {
        $skrektorBAC = DB::table('sk_rektor')->get();
        foreach ($skrektorBAC as $sk) {
            $sk = $sk->skrektor_BA;
        }
        $cetak = DB::SELECT('select biaya_cetak from biaya_cetak');
        foreach ($cetak as $cetak) {
            $cetak = (int) $cetak->biaya_cetak;
        }
        $handling = DB::SELECT('select handling from handling');
        foreach ($handling as $handling) {
            $handling = (float) $handling->handling;
        }
        $pengadaan = DB::SELECT('select pengadaan from pengadaan');
        foreach ($pengadaan as $pengadaan) {
            $pengadaan = (float) $pengadaan->pengadaan;
        }
        $design = DB::SELECT('select designlayout from designlayout');
        foreach ($design as $design) {
            $design = (float) $design->designlayout;
        }
        $pemeliharaan = DB::SELECT('select pemeliharaan from pemeliharaan');
        foreach ($pemeliharaan as $pemeliharaan) {
            $pemeliharaan = (float) $pemeliharaan->pemeliharaan;
        }
        $mutu = DB::SELECT('select kendali_mutu from kendali_mutu');
        foreach ($mutu as $mutu) {
            $mutu = (float)$mutu->kendali_mutu;
        }
        $pendukung = DB::SELECT('select pendukung from pendukung');
        foreach ($pendukung as $pendukung) {
            $pendukung = (float)$pendukung->pendukung;
        }
        $resiko_penyimpanan = DB::SELECT('select resiko from resiko_penyimpanan');
        foreach ($resiko_penyimpanan as $resiko) {
            $resiko_penyimpanan = (float)$resiko->resiko;
        }
        $resiko_mutu = DB::SELECT('select resiko_mutu from resiko_mutu');
        foreach ($resiko_mutu as $resiko_mutu) {
            $resiko_mutu = (float)$resiko_mutu->resiko_mutu;
        }
        $mitra = DB::SELECT('select mitra from mitra');
        foreach ($mitra as $mitra) {
            $mitra = (float)$mitra->mitra;
        }
        $pengembangan_materi = DB::SELECT('select pengembangan_materi from pengembangan_materi');
        foreach ($pengembangan_materi as $materi) {
            $pengembangan_materi = (float)$materi->pengembangan_materi;
        }
        $pengembang = DB::SELECT('select pengembang from pengembang');
        foreach ($pengembang as $pengembang) {
            $pengembang = (float)$pengembang->pengembang;
        }
        $produkba = DB::SELECT('select produk_ba from produk_ba');
        foreach ($produkba as $produkba) {
            $produkba = (float)$produkba->produk_ba;
        }
        $gudangba = DB::SELECT('select gudang_ba from pergudangan_ba');
        foreach ($gudangba as $gudangba) {
            $gudangba = (float)$gudangba->gudang_ba;
        }
        $royalti = DB::SELECT('select royalti from royalti');
        foreach ($royalti as $royalti) {
            $royalti = (float)$royalti->royalti;
        }
        $mitra_nonmhs = DB::SELECT('select mitra_nonmhs from mitra_nonmhs');
        foreach ($mitra_nonmhs as $mitra1) {
            $mitra_nonmhs = (float)$mitra1->mitra_nonmhs;
        }


        $harga = new Harga_Buku();

        $harga->kode_mk = $request->kode_mk;
        $harga->edisi = $request->edisi;
        $harga->judul_matakuliah = $request->matkul;
        $lembar = $request->harga_lembar;
        $todayDate = date("Y-m-d");
        $harga->tanggal_input = $todayDate;
        $harga->surat_keterangan = $sk;
        $harga->harga_lembar = $lembar;
        $lembar_cetak = $lembar * $cetak;
        $harga->biaya_cetak = $lembar_cetak;
        $handling1 = $harga->handling = $lembar_cetak * $handling / 100;
        $design1 = $harga->design = $lembar_cetak * $design / 100;
        $pengadaan1 = $harga->pengadaan = $lembar_cetak * $pengadaan / 100;
        $kendali_mutu1 = $harga->kendali_mutu = $lembar_cetak * $mutu / 100;
        $pemeliharaan1 = $harga->pemeliharaan = $lembar_cetak * $pemeliharaan / 100;
        $harga_pokok = $harga->harga_pokok = $lembar_cetak + $handling1 + $design1 + $pengadaan1 + $kendali_mutu1 + $pemeliharaan1;
        $pendukung1 = $harga->pendukung = $harga_pokok * $pendukung / 100;
        $resiko_penyimpanan1 = $harga->resiko_penyimpanan = $harga_pokok * $resiko_penyimpanan / 100;
        $resiko_mutu1 = $harga->resiko_mutu = $harga_pokok * $resiko_mutu / 100;
        $harga_kotor = $harga->harga_kotor = $harga_pokok + $pendukung1 + $resiko_penyimpanan1 + $resiko_mutu1;

        $harga_siswa = ceil($harga_kotor);
        $ratusan = substr($harga_siswa, -1);
        switch ($ratusan) {
            case '0':
                $hasil = $harga_siswa + 0;
                break;
            case '1':
                $hasil = $harga_siswa + 9;
                break;
            case '2':
                $hasil = $harga_siswa + 8;
                break;
            case '3':
                $hasil = $harga_siswa + 7;
                break;
            case '4':
                $hasil = $harga_siswa + 6;
                break;
            case '5':
                $hasil = $harga_siswa + 5;
                break;
            case '6':
                $hasil = $harga_siswa + 4;
                break;
            case '7':
                $hasil = $harga_siswa + 3;
                break;
            case '8':
                $hasil = $harga_siswa + 2;
                break;
            case '9':
                $hasil = $harga_siswa + 1;
                break;
        }

        $total = $harga->harga_mahasiswa = $hasil;

        $harga->save();

        //Bac_non_mhs
        $harganonmhs = new Harga_Buku_Nonmhs();
        $id_harga = DB::select('select id_harga from harga_buku');
        foreach ($id_harga as $id) {
            $id = (int)$id->id_harga;
        }
        $harganonmhs->id_bac_mhs = $id;
        $pengembanganmateri1 = $harganonmhs->pengembangan_materi = round($total * $pengembangan_materi / 100);
        $pengembang1 = $total * $pengembang / 100;
        $pengembang2 = $harganonmhs->pengembang = round($pengembang1);
        $produkba1 = $harganonmhs->produk_ba = round($total * $produkba / 100);
        $gudangba1 = $harganonmhs->pergudangan_ba = round($total * $gudangba / 100);
        $hargajual = $harganonmhs->harga_jual = $total + $pengembanganmateri1 + $pengembang2 + $produkba1 + $gudangba1;
        $hargakotor1 = $harganonmhs->harga_kotor = round(100 / 90 * $hargajual);

        $royalti = $harganonmhs->royalti = round($hargakotor1 * $royalti / 100);

        $puluhan = substr($hargakotor1, -1);
        switch ($puluhan) {
            case '0':
                $hasil1 = $hargakotor1 + 0;
                break;
            case '1':
                $hasil1 = $hargakotor1 + 9;
                break;
            case '2':
                $hasil1 = $hargakotor1 + 8;
                break;
            case '3':
                $hasil1 = $hargakotor1 + 7;
                break;
            case '4':
                $hasil1 = $hargakotor1 + 6;
                break;
            case '5':
                $hasil1 = $hargakotor1 + 5;
                break;
            case '6':
                $hasil1 = $hargakotor1 + 4;
                break;
            case '7':
                $hasil1 = $hargakotor1 + 3;
                break;
            case '8':
                $hasil1 = $hargakotor1 + 2;
                break;
            case '9':
                $hasil1 = $hargakotor1 + 1;
                break;
        }
        $total1 =  $hasil1;

        $bulat = substr($total1, -2);
        switch ($bulat) {
            case '00':
                $hasil2 = $total1 + 00;
                break;
            case '10':
                $hasil2 = $total1 + 90;
                break;
            case '20':
                $hasil2 = $total1 + 80;
                break;
            case '30':
                $hasil2 = $total1 + 70;
                break;
            case '40':
                $hasil2 = $total1 + 60;
                break;
            case '50':
                $hasil2 = $total1 + 50;
                break;
            case '60':
                $hasil2 = $total1 + 40;
                break;
            case '70':
                $hasil2 = $total1 + 30;
                break;
            case '80':
                $hasil2 = $total1 + 20;
                break;
            case '90':
                $hasil2 = $total1 + 10;
                break;
        }

        $total2 = $harganonmhs->harga_nonmhs = $hasil2;


        $harganonmhs->save();

        //Bac_mhs_mitra

        $hargamhsmitra = new Harga_Bac_Mitra();
        $id_harga = DB::select('select id_harga from harga_buku');
        foreach ($id_harga as $id) {
            $id = (int)$id->id_harga;
        }
        $hargamhsmitra->id_bac_mhs = $id;
        $mitra1 = $hargamhsmitra->mitra = $total * $mitra / 100;
        $hargakotor2 = $hargamhsmitra->harga_kotor = $total + $mitra1;

        $harga_mitra = ceil($hargakotor2);
        $ratusan = substr($harga_mitra, 4);
        if($ratusan != ""){
        switch ($ratusan) {
            case '0':
                $hasil3 = $harga_mitra + 0;
                break;
            case '1':
                $hasil3 = $harga_mitra + 9;
                break;
            case '2':
                $hasil3 = $harga_mitra + 8;
                break;
            case '3':
                $hasil3 = $harga_mitra + 7;
                break;
            case '4':
                $hasil3 = $harga_mitra + 6;
                break;
            case '5':
                $hasil3 = $harga_mitra + 5;
                break;
            case '6':
                $hasil3 = $harga_mitra + 4;
                break;
            case '7':
                $hasil3 = $harga_mitra + 3;
                break;
            case '8':
                $hasil3 = $harga_mitra + 2;
                break;
            case '9':
                $hasil3 = $harga_mitra + 1;
                break;
        }  
        $total5 = $hasil3;
       

        $bulat = substr($total5, -2);
    }else 
    {
        $puluh = substr($harga_mitra, 3);
        switch ($puluh) {
            case '0':
                $hasil3 = $harga_mitra + 0;
                break;
            case '1':
                $hasil3 = $harga_mitra + 9;
                break;
            case '2':
                $hasil3 = $harga_mitra + 8;
                break;
            case '3':
                $hasil3 = $harga_mitra + 7;
                break;
            case '4':
                $hasil3 = $harga_mitra + 6;
                break;
            case '5':
                $hasil3 = $harga_mitra + 5;
                break;
            case '6':
                $hasil3 = $harga_mitra + 4;
                break;
            case '7':
                $hasil3 = $harga_mitra + 3;
                break;
            case '8':
                $hasil3 = $harga_mitra + 2;
                break;
            case '9':
                $hasil3 = $harga_mitra + 1;
                break;
        }  
        $total5 = $hasil3;
        $bulat = substr($total5, -2);
    }

     

        switch ($bulat) {
            case '00':
                $hasil9 = $total5 + 00;
                break;
            case '10':
                $hasil9 = $total5 + 90;
                break;
            case '20':
                $hasil9 = $total5 + 80;
                break;
            case '30':
                $hasil9 = $total5 + 70;
                break;
            case '40':
                $hasil9 = $total5 + 60;
                break;
            case '50':
                $hasil9 = $total5 + 50;
                break;
            case '60':
                $hasil9 = $total5 + 40;
                break;
            case '70':
                $hasil9 = $total5 + 30;
                break;
            case '80':
                $hasil9 = $total5 + 20;
                break;
            case '90':
                $hasil9 = $total5 + 10;
                break;
            default;
        }

        $hargamhsmitra->bac_mhs_mitra = $hasil9;

        $hargamhsmitra->save();

        //Harga_Bac_NonMhs_Mitra

        $harganonmhsmitra = new Harga_Nonmhs_Mitra();

        $id = DB::select('select id from harga_buku_nonmhs');
        foreach ($id as $id) {
            $id = (int)$id->id;
        }
        $harganonmhsmitra->id_bac_nonmhs = $id;
        $mitra_nonmhs1 = $harganonmhsmitra->mitra_nonmhs = $total2 * $mitra_nonmhs / 100;
        $hargakotor3 = $harganonmhsmitra->harga_kotor = $total2 + $mitra_nonmhs1;

        $harganonmitra = ceil($hargakotor3);

        $ratusan = substr($harganonmitra, -1);
        switch ($ratusan) {
            case '0':
                $hasil6 = $harganonmitra + 0;
                break;
            case '1':
                $hasil6 = $harganonmitra + 9;
                break;
            case '2':
                $hasil6 = $harganonmitra + 8;
                break;
            case '3':
                $hasil6 = $harganonmitra + 7;
                break;
            case '4':
                $hasil6 = $harganonmitra + 6;
                break;
            case '5':
                $hasil6 = $harganonmitra + 5;
                break;
            case '6':
                $hasil6 = $harganonmitra + 4;
                break;
            case '7':
                $hasil6 = $harganonmitra + 3;
                break;
            case '8':
                $hasil6 = $harganonmitra + 2;
                break;
            case '9':
                $hasil6 = $harganonmitra + 1;
                break;
            default;
        }

        $total3 = $hasil6;

        $bulat = substr($total3, -2);
        switch ($bulat) {
            case '00':
                $hasil5 = $total3 + 00;
                break;
            case '10':
                $hasil5 = $total3 + 90;
                break;
            case '20':
                $hasil5 = $total3 + 80;
                break;
            case '30':
                $hasil5 = $total3 + 70;
                break;
            case '40':
                $hasil5 = $total3 + 60;
                break;
            case '50':
                $hasil5 = $total3 + 50;
                break;
            case '60':
                $hasil5 = $total3 + 40;
                break;
            case '70':
                $hasil5 = $total3 + 30;
                break;
            case '80':
                $hasil5 = $total3 + 20;
                break;
            case '90':
                $hasil5 = $total3 + 10;
                break;
            default;
        }

        $total4 = $harganonmhsmitra->harga_bac_nonmhs_mitra = $hasil5;

        $harganonmhsmitra->save();

        return redirect('/hargabuku');
    }

    public function skrektorBA($id)
    {
        $skrektorBAC = DB::table('sk_rektor')->where('id', $id)->get();
        foreach ($skrektorBAC as $skrektorBAC) {
            $filename = storage_path() . '/app/pdf/skrektorBA/' . $skrektorBAC->skrektor_BA;
            if (file_exists($filename)) {
                return response()->download(storage_path() . '/app/pdf/skrektorBA/' . $skrektorBAC->skrektor_BA, $skrektorBAC->skrektor_BA, [], 'inline');
            } else {
                Alert::Error('Gagal', 'Data Tidak Ada yang Didownload');
                return back();
            }
        }
    }
    public function destroy($id)
    {
        $hapus = DB::table('harga_buku')
        ->select('id_harga')
        ->where('id_harga',$id)->get();
        
        foreach($hapus as $hapus){
            $hapusan = (int)$hapus->id_harga;
        }

        $deletebac = DB::table('harga_buku')
        ->where('harga_buku.id_harga',$hapusan)
        ->delete();
        
        $deletebacnonut = DB::table('harga_buku_nonmhs')
        ->where('id_bac_mhs',$hapusan)
        ->delete();

        $deletemhsmitra= DB::table('harga_mhs_mitra')
        ->where('id_bac_mhs',$hapusan)
        ->delete();

        $deletenonmhsmitra= DB::table('harga_nonmhs_mitra')
        ->where('id_bac_nonmhs',$hapusan)
        ->delete();
       
        if($deletebac && $deletebacnonut &&  $deletemhsmitra && $deletenonmhsmitra )
        {
            Alert::Success('Berhasil', 'Data Dihapus');
            return back();
        } else {
            Alert::Error('Gagal', 'Data gagal Dihapus');
            return back();
        }
    }
}
