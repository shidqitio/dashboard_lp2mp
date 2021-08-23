<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master_Harga_Bnbb;
use App\Harga_BNBB;
use Alert;
use File;
use DB;

class ControllerBNBB extends Controller
{
    public function viewsetbnbb()
    {
        $setbnbb = Master_Harga_Bnbb::all();
        
        return view('users.admin.sethargabnbb')->with(compact('setbnbb'));
    }

    public function updatesetbnbb(Request $request)
    {
        if($request->has("setbnbb1"))
        {
            if($request->hasfile("skrektorBNBB"))
                {
                            //hapus pdf skrektorBNBB
                    $sk_bnbb = Master_Harga_Bnbb::where('id', $request->id)->first();
                    File::delete(storage_path() . '/app/pdf/skrektorBNBB/' . $sk_bnbb->skrektor_bnbb);

                        //upload 
                    $filenametext = $request->file('skrektorBNBB')->getClientOriginalName();
                    $filename = $filenametext;
                    $path = $request->file('skrektorBNBB')->storeAs('pdf/skrektorBNBB', $filename);

                    //database 
                    DB::table('master_harga_bnbb')->where('id',$request->id)->update([
                        'skrektor_bnbb' => $request->skrektorBNBB = $filename, 
                        'biaya_cetak' => $request->biaya_cetak,
                        'handling' => $request->handling, 
                        'desain_layout' => $request->design, 
                        'pengadaan' => $request->pengadaan, 
                        'kendali_mutu' => $request->mutu, 
                        'pemeliharaan' => $request->pemeliharaan,
                        'bahan_pendukung' => $request->pendukung, 
                        'penyimpanan' => $request->penyimpanan, 
                        'resiko_mutu' => $request->resiko_mutu
                    ]);
                }
                else 
                {
                        //database 
                        DB::table('master_harga_bnbb')->where('id',$request->id)->update([
                        'biaya_cetak' => $request->biaya_cetak,
                        'handling' => $request->handling, 
                        'desain_layout' => $request->design, 
                        'pengadaan' => $request->pengadaan, 
                        'kendali_mutu' => $request->mutu, 
                        'pemeliharaan' => $request->pemeliharaan,
                        'bahan_pendukung' => $request->pendukung, 
                        'penyimpanan' => $request->penyimpanan, 
                        'resiko_mutu' => $request->resiko_mutu
                    ]);
                }
                Alert::success('Berhasil', 'Data Berhasil Diubah');
                return redirect('/setmasterbnbb');
            }

        }

        public function viewhargabnbb()
        {
            $harga_bnbb = Master_Harga_Bnbb::all();
            $total_bnbb = Harga_BNBB::all();
            return view('users.admin.hargabnbb')->with(compact('harga_bnbb','total_bnbb'));
        }

        public function downloadskbnbb($id)
        {
            $skrektorbnbb = DB::table('master_harga_bnbb')->where('id', $id)->get();
            foreach ($skrektorbnbb as $sk) {
                $filename = storage_path() . '/app/pdf/skrektorBNBB/' . $sk->skrektor_bnbb;
                if (file_exists($filename)) {
                    return response()->download(storage_path() . '/app/pdf/skrektorBNBB/' . $sk->skrektor_bnbb, $sk->skrektor_bnbb, [], 'inline');
                } else {
                    Alert::Error('Gagal', 'Data Tidak Ada yang Didownload');
                    return back();
                }
            }
        }

        public function hitung_bnbb(Request $request)
        {
            $harga_bnbb = Master_Harga_Bnbb::all();
            foreach($harga_bnbb as $harga)
            {
                $sk = $harga->skrektor_bnbb;
                $cetak = (int) $harga->biaya_cetak;
                $handling = (float) $harga->handling;
                $desain = (float) $harga->desain_layout;
                $pengadaan = (float) $harga->pengadaan;
                $kendali_mutu = (float) $harga->kendali_mutu;
                $pemeliharaan = (float) $harga->pemeliharaan;
                $pendukung = (float) $harga->bahan_pendukung;
                $penyimpanan = (float) $harga->penyimpanan;
                $resiko = (float) $harga->resiko_mutu;

            }

            $bnbb = new Harga_BNBB() ; 

            $bnbb->kode_mk = $request->kode_mk; 
            $bnbb->edisi = $request->edisi; 
            $bnbb->nama_bnbb = $request->nama_bnbb;
            $lembar =  $request->harga_lembar;
            $todayDate = date("Y-m-d");
            $bnbb->tanggal_input = $todayDate; 
            $bnbb->surat_keterangan = $sk;
            $penulis = $bnbb->penulis = $request->penulis;
            $buku = $bnbb->buku = $request->buku;
            $bnbb->jumlah_lembar = $lembar;
            //case buku dan penulis
            switch($buku){
                case 'akademik': 
                    (int)$buku_hitung = 1000 ;
                    break;
                case 'non_akademik' :
                    (int)$buku_hitung = 300;
                    break;
            }
            switch($penulis){
                case 'guru_besar':
                    (int)$penulis_hitung = 110000; 
                break; 
                case 's3':
                    (int)$penulis_hitung = 85000; 
                break; 
                case 's2':
                    (int)$penulis_hitung = 75000; 
                break; 
            }
            //hitung biaya bnbb
            $biaya_cetak = $lembar * $cetak ;
            $pengembangan_materi = (($penulis_hitung + 25000) * $lembar ) / $buku_hitung;
            $handling1 = $handling/100 * $biaya_cetak;
            $desain1 = $desain/100 * $biaya_cetak;
            $pengadaan1 = ceil($pengadaan/100 * $biaya_cetak);
            $kendali_mutu1 = $kendali_mutu/100 * $biaya_cetak;
            $pemeliharaan1 = $pemeliharaan/100 * $biaya_cetak;
            $pendukung1 = $pendukung/100 * $biaya_cetak;
            $penyimpanan1 = $penyimpanan/100 * $biaya_cetak;
            $resiko1 = $resiko/100 * $biaya_cetak;
            $harga_jual = $biaya_cetak + $pengembangan_materi +
            + $handling1 + $desain1 + $pengadaan1 + $kendali_mutu1 +
            $pemeliharaan1 + $pendukung1 + $penyimpanan1 + 
            $resiko1; 
            //selesai hitung
            //masuk database hitung
            $bnbb->biaya_cetak = $biaya_cetak;
            $bnbb->pengembangan_materi = $pengembangan_materi;
            $bnbb->handling = $handling1;
            $bnbb->desain_layout = $desain1;
            $bnbb->pengadaan = $pengadaan1;
            $bnbb->kendali_mutu = $kendali_mutu1;
            $bnbb->pemeliharaan = $pemeliharaan1;
            $bnbb->bahan_pendukung = $pendukung1;
            $bnbb->penyimpanan = $penyimpanan1;
            $bnbb->resiko_mutu = $resiko1;
            $bnbb->harga_total = $harga_jual;

            $simpan = $bnbb->save();

            if($simpan){
                Alert::Success('Berhasil', 'Data Telah Disimpan');
                return redirect('/harga_bnbb');
            }
            else {
                Alert::error('Gagal','Data Gagal Disimpan');
                return back();
            }
        }

        public function destroy($id)
        {
            $deletebnbb = DB::table('harga_bnbb')
            ->where('id',$id)
            ->delete();

            if($deletebnbb){
                Alert::Success('Berhasil','Data Berhasil Dihapus');
                return redirect('/harga_bnbb');
            }
            else{
                Alert::error('Gagal','Data Gagal Dihapus');
                return back();
            }
        }

    }
