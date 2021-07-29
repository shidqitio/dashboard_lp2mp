<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ControllerDashboard extends Controller
{
    public function sek_lppmp()
    {
        return view('users.admin.dashboard');
    }
    public function p2m2()
    {
        return view('users.p2m2.dashboard');
    }
    public function pbb()
    {
        $pbb_jumlah_matkul_tuweb_atpem=DB::connection('mysql5')
        ->select('SELECT f.singkatan, COUNT(distinct c.kode_mtk ) jml_mhs					
        FROM m_data_pribadi a					
        Join t_billing_header b on a.nim=b.nim					
        join t_billing_detail c on c.nobilling=b.nobilling					
        join m_program_studi e on e.kode_program_studi=a.kode_program_studi					
        join m_fakultas f on f.kode_fakultas=e.kode_fakultas					
        where b.masa=20211 and b.kodejenisbayar=006 					
        and (b.statusbank=1 or b.kodestatusbiling in (1,2,3,"L",7))					
        and (status_mtk <>"x" or status_mtk is null)					
        group by f.singkatan					
        ORDER BY f.kode_fakultas');

        $pbb_jumlah_peserta_nim_tuweb_atpem=DB::connection('mysql5')
        ->select('SELECT f.singkatan, count(distinct b.nim ) jml_mhs				
        FROM m_data_pribadi a					
        Join t_billing_header b on a.nim=b.nim					
        join t_billing_detail c on c.nobilling=b.nobilling					
        join m_program_studi e on e.kode_program_studi=a.kode_program_studi					
        join m_fakultas f on f.kode_fakultas=e.kode_fakultas					
        where b.masa=20211 and b.kodejenisbayar=006 					
        and (b.statusbank=1 or b.kodestatusbiling in (1,2,3,"L",7))					
        and (status_mtk <>"x" or status_mtk is null)					
        group by f.singkatan					
        ORDER BY f.kode_fakultas');
					
        $pbb_jumlah_matkul_tuweb_sipas=DB::connection('mysql5')
        ->select('SELECT fk.singkatan, count(distinct t.kode_mtk) as peserta from(								
        (SELECT t_billing_header.masa, m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk, m_data_pribadi.kode_program_studi, masa_registrasi_awal, kode_kabko, kode_upbjj								
        FROM m_data_pribadi								
        JOIN t_billing_header ON m_data_pribadi.nim = t_billing_header.nim								
        JOIN t_billing_detail ON t_billing_detail.nobilling = t_billing_header.nobilling								
        JOIN t_sipas_mhs ON t_sipas_mhs.nim = t_billing_header.nim AND t_sipas_mhs.masa = t_billing_header.masa								
        JOIN t_layanan_sipas ON t_layanan_sipas.kode_sipas = t_sipas_mhs.kode_sipas AND t_layanan_sipas.masa = t_sipas_mhs.masa								
        WHERE t_billing_header.kodejenisbayar IN (002,001)								
        AND ( t_billing_header.statusbank =1 OR t_billing_header.kodestatusbiling IN (1,3,"L"))								
        AND t_layanan_sipas.kode_layanan =07							
        AND t_billing_header.masa=20211								
        AND t_billing_detail.kode_mtk IN (SELECT kode_mtk FROM t_kurikulum_detail								
        WHERE status_ttm =1								
        AND t_kurikulum_detail.kode_program_studi = m_data_pribadi.kode_program_studi                                  			  					
        AND t_kurikulum_detail.masa_kurikulum = m_data_pribadi.masa_kurikulum								
        AND t_kurikulum_detail.nomor_kurikulum=0)								
        AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM t_matakuliah_tawar tw								
        JOIN m_komposisi_nilai k ON k.kode_komposisi_nilai = tw.kode_komposisi_nilai								
        WHERE masa=20211 AND tw.kode_jenis_program IN (1,2) AND k.status_praktek = "P")								
        AND t_billing_detail.status_mtk<>"x"								
        AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4560)								
        AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4501)                                 								
        AND (t_billing_detail.kode_status_paket ="P" OR t_billing_header.kode_status_paket = "P")								
        GROUP BY m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk								
        ORDER BY m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk)								
            union								
        (SELECT t_billing_header.masa, m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk, m_data_pribadi.kode_program_studi, masa_registrasi_awal, kode_kabko, kode_upbjj								
        FROM m_data_pribadi								
        JOIN t_billing_header ON m_data_pribadi.nim = t_billing_header.nim								
        JOIN t_billing_detail ON t_billing_detail.nobilling = t_billing_header.nobilling								
        JOIN t_sipas_mhs ON t_sipas_mhs.nim = t_billing_header.nim AND t_sipas_mhs.masa = t_billing_header.masa								
        JOIN t_layanan_sipas ON t_layanan_sipas.kode_sipas = t_sipas_mhs.kode_sipas AND t_layanan_sipas.masa = t_sipas_mhs.masa								
        WHERE t_billing_header.kodejenisbayar IN (002,001)								
        AND ( t_billing_header.statusbank = 1 OR t_billing_header.kodestatusbiling IN (1,3,"L"))								
        AND t_billing_header.masa=20211								
        AND t_layanan_sipas.kode_layanan =06								
        AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM t_matakuliah_tawar tw								
        JOIN m_komposisi_nilai k ON k.kode_komposisi_nilai = tw.kode_komposisi_nilai								
        WHERE masa=20211 AND tw.kode_jenis_program IN (1,2) AND k.status_praktek = "P")						
        AND t_billing_detail.status_mtk<>"x"                                                                    								
        AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4560)						
        AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4501)								
        AND (t_billing_detail.kode_status_paket = "P" OR t_billing_header.kode_status_paket = "P")								
        GROUP BY m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk								
        ORDER BY m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk)) as t								
        join m_program_studi ps on t.kode_program_studi=ps.kode_program_studi								
        join m_fakultas fk on ps.kode_fakultas=fk.kode_fakultas    								
        group by fk.singkatan								
        ORDER BY fk.kode_fakultas');          
                    							  
        return view('users.pbb.dashboard')->with(compact('pbb_jumlah_matkul_tuweb_atpem','pbb_jumlah_peserta_nim_tuweb_atpem','pbb_jumlah_matkul_tuweb_sipas'));
        
    }
    public function puslaba()
    {
        return view('users.puslaba.dashboard');
    }
    public function pusjian()
    {
        return view('users.pusjian.dashboard');
    }
}
