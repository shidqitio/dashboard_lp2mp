<?php

namespace App\Http\Controllers;

use App\Events;
use App\Exports\KalenderExport;
use App\Kalender;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;


class ControllerPBB extends Controller
{
    public function index(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            $from = $request->input('from');
            $to   = $request->input('to');
            if ($request->has('search') && $from != NULL && $to != NULL) {
                // select search
                $search = DB::table('kalender')
                    ->select('*')
                    ->where('tanggal_mulai', '=', '' . $from . '')
                    ->where('tanggal_selesai', '=', '' . $to . '')
                    ->get();

                return view('users.pbb.kalenderpbb', ['kalender' => $search]);
            } elseif ($request->has('export')) {
            } else {
                $search = DB::table('kalender')
                    ->select('*')
                    ->get();
                return view('users.pbb.kalenderpbb', ['kalender' => $search]);
            }
        } else {
            //select all
            $kalender = DB::table('kalender')
                ->select('*')
                ->get();
            return view('users.pbb.kalenderpbb', ['kalender' => $kalender]);
        }
    }  

    public function searchtuweb(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('get'))
        {
            $search = $request->input('search');
            if ($request->has('show'))
            {
                $search = $request->get('search');
                
                $result_pbb_jumlah_matkul_tuweb_atpem=DB::connection('mysql5')
                ->select('SELECT f.singkatan, COUNT(distinct c.kode_mtk ) jml_mhs					
                FROM m_data_pribadi a					
                Join t_billing_header b on a.nim=b.nim					
                join t_billing_detail c on c.nobilling=b.nobilling					
                join m_program_studi e on e.kode_program_studi=a.kode_program_studi					
                join m_fakultas f on f.kode_fakultas=e.kode_fakultas					
                where b.masa='.$search.' and b.kodejenisbayar=006 					
                and (b.statusbank=1 or b.kodestatusbiling in (1,2,3,"L",7))					
                and (status_mtk <>"x" or status_mtk is null)					
                group by f.singkatan					
                ORDER BY f.kode_fakultas');
        
                $result_pbb_jumlah_peserta_nim_tuweb_atpem=DB::connection('mysql5')
                ->select('SELECT f.singkatan, count(distinct b.nim ) jml_mhs				
                FROM m_data_pribadi a					
                Join t_billing_header b on a.nim=b.nim					
                join t_billing_detail c on c.nobilling=b.nobilling					
                join m_program_studi e on e.kode_program_studi=a.kode_program_studi					
                join m_fakultas f on f.kode_fakultas=e.kode_fakultas					
                where b.masa='.$search.' and b.kodejenisbayar=006 					
                and (b.statusbank=1 or b.kodestatusbiling in (1,2,3,"L",7))					
                and (status_mtk <>"x" or status_mtk is null)					
                group by f.singkatan					
                ORDER BY f.kode_fakultas');

                $result_pbb_jumlah_kelas_atpem = DB::connection('mysql5')
                ->select('SELECT z.kode_fakultas,									
                (CASE WHEN z.kode_fakultas= 1 THEN REPLACE (z.kode_fakultas,1,"FKIP") 									
                WHEN z.kode_fakultas= 2 THEN REPLACE (z.kode_fakultas,2,"FST") 									
                WHEN z.kode_fakultas= 3 THEN REPLACE (z.kode_fakultas,3,"FHISIP") 									
                WHEN z.kode_fakultas= 4 THEN REPLACE (z.kode_fakultas,4,"FE")									
                ELSE z.kode_fakultas END) AS Fakultas,									
                count(*) semua_hasil from									
                ((select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas									
                from z_t_surat_upbjj as a									
                join z_tutorial as b on a.idtutorial=b.idtutorial									
                join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor									
                join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 									
                join z_dp_tutor as e on a.idtutor=e.idtutor and e.status_tutor= 1									
                join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 									
                where   a.masa= '.$search.'  and a.keterangan_izin_kelas not like "%wajib%"								
                and a.status_approval= "YA" AND a.pilihan in (1,2)									
                and d.pilihan=a.pilihan									
                 order by a.kode_upbjj)									
                 union									
                  (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas									
                from z_t_surat_upbjj as a									
                join z_tutorial as b on a.idtutorial=b.idtutorial									
                join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor									
                join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 									
                join z_dp_tutor_pps as e on a.idtutor=e.idtutor and e.status_tutor= 1								
                join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 									
                where   a.masa= '.$search.' and a.keterangan_izin_kelas not like "%wajib%"								
                and a.status_approval="YA" AND a.pilihan in (1,2)									
                and d.pilihan=a.pilihan									
                 order by a.kode_upbjj)									
                union									
                (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas									
                from z_t_surat_upbjj as a									
                join z_tutorial as b on a.idtutorial=b.idtutorial									
                join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor									
                join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 									
                join z_dp_pembimbing as e on a.idtutor=e.idpembimbing and e.status=1									
                join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 									
                where   a.masa= '.$search.' and a.keterangan_izin_kelas not like "%wajib%"									
                and a.status_approval="YA" AND a.pilihan in (1,2)									
                and d.pilihan=a.pilihan									
                 order by a.kode_upbjj)) as z									
                 group by z.kode_fakultas									
                ');

  return view('users.pbb.dashboardtuwebresult')->with(compact('result_pbb_jumlah_matkul_tuweb_atpem',
  'result_pbb_jumlah_peserta_nim_tuweb_atpem', 'result_pbb_jumlah_kelas_atpem','search'));

            }
        }
    }

    public function searchtuwebsipas(Request $request)
    {
        $method = $request->method();
        
        if ($request->isMethod('get'))
        {
            $search = $request->get('search');

            $result_pbb_jumlah_peserta_nim=DB::connection('mysql5')
            ->select('SELECT  z.kode_fakultas,								
            (CASE WHEN z.kode_fakultas=1 THEN REPLACE (z.kode_fakultas,1,"FKIP") 								
            WHEN z.kode_fakultas=2 THEN REPLACE (z.kode_fakultas,2,"FST") 								
            WHEN z.kode_fakultas=3 THEN REPLACE (z.kode_fakultas,3,"FHISIP") 								
            WHEN z.kode_fakultas=4 THEN REPLACE (z.kode_fakultas,4,"FE")								
            ELSE z.kode_fakultas END) AS Fakultas,								
            count(*) as total from								
            ((select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas								
            from z_t_surat_upbjj as a								
            join z_tutorial as b on a.idtutorial=b.idtutorial								
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor								
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 								
            join z_dp_tutor as e on a.idtutor=e.idtutor and e.status_tutor=1								
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 								
            where   a.masa='.$search.'  and a.keterangan_izin_kelas not like "%wajib%"						
            and a.status_approval="YA" AND a.pilihan in (1,2)								
            and d.pilihan=a.pilihan								
            order by a.kode_upbjj)								
            union								
            (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas								
            from z_t_surat_upbjj as a								
            join z_tutorial as b on a.idtutorial=b.idtutorial								
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor								
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 								
            join z_dp_tutor_pps as e on a.idtutor=e.idtutor and e.status_tutor=1								
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 								
            where   a.masa='.$search.' and a.keterangan_izin_kelas not like "%wajib%"								
            and a.status_approval="YA" AND a.pilihan in (1,2)								
            and d.pilihan=a.pilihan								
            order by a.kode_upbjj)								
            union								
            (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas								
            from z_t_surat_upbjj as a								
            join z_tutorial as b on a.idtutorial=b.idtutorial								
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor								
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 								
            join z_dp_pembimbing as e on a.idtutor=e.idpembimbing and e.status=1								
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 								
            where   a.masa='.$search.' and a.keterangan_izin_kelas not like "%wajib%"								
            and a.status_approval="YA" AND a.pilihan in (1,2)								
            and d.pilihan=a.pilihan								
            order by a.kode_upbjj)) as z								
            group by z.kode_fakultas
            ');
    
    
            $result_pbb_jumlah_mata_kuliah_sipas=DB::connection('mysql5')
            ->select('select fk.singkatan, count(distinct t.kode_mtk) as peserta from(														
                (SELECT t_billing_header.masa, m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk, m_data_pribadi.kode_program_studi, masa_registrasi_awal, kode_kabko, kode_upbjj														
                                FROM m_data_pribadi														
                                JOIN t_billing_header ON m_data_pribadi.nim = t_billing_header.nim														
                                JOIN t_billing_detail ON t_billing_detail.nobilling = t_billing_header.nobilling														
                                JOIN t_sipas_mhs ON t_sipas_mhs.nim = t_billing_header.nim AND t_sipas_mhs.masa = t_billing_header.masa														
                                JOIN t_layanan_sipas ON t_layanan_sipas.kode_sipas = t_sipas_mhs.kode_sipas AND t_layanan_sipas.masa = t_sipas_mhs.masa														
                                WHERE t_billing_header.kodejenisbayar IN (002,001)														
                                AND ( t_billing_header.statusbank = 1 OR t_billing_header.kodestatusbiling IN (1,3,"L"))														
                                AND t_layanan_sipas.kode_layanan = 07														
                                AND t_billing_header.masa='.$search.'													
                                AND t_billing_detail.kode_mtk IN (SELECT kode_mtk FROM t_kurikulum_detail														
                                WHERE status_ttm = 1														
                                AND t_kurikulum_detail.kode_program_studi = m_data_pribadi.kode_program_studi                                  			  											
                                AND t_kurikulum_detail.masa_kurikulum = m_data_pribadi.masa_kurikulum														
                                AND t_kurikulum_detail.nomor_kurikulum=0)														
                                AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM t_matakuliah_tawar tw														
                                JOIN m_komposisi_nilai k ON k.kode_komposisi_nilai = tw.kode_komposisi_nilai														
                                WHERE masa='.$search.' AND tw.kode_jenis_program IN (1,2) AND k.status_praktek = "P")														
                                AND t_billing_detail.status_mtk<>"x"														
                                AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4560)														
                                AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4501)                                 														
                                AND (t_billing_detail.kode_status_paket = "P" OR t_billing_header.kode_status_paket = "P")														
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
                                AND t_billing_header.masa='.$search.'														
                                AND t_layanan_sipas.kode_layanan =06														
                                AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM t_matakuliah_tawar tw														
                                JOIN m_komposisi_nilai k ON k.kode_komposisi_nilai = tw.kode_komposisi_nilai														
                         WHERE masa= '.$search.' AND tw.kode_jenis_program IN (1,2) AND k.status_praktek = "P")												
                                AND t_billing_detail.status_mtk<>"x"                                                                    														
                         AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4560)												
                                AND t_billing_detail.kode_mtk NOT IN (SELECT kode_mtk FROM m_mata_kuliah WHERE right(kode_mtk,4)=4501)														
                                AND (t_billing_detail.kode_status_paket = "P" OR t_billing_header.kode_status_paket = "P")														
                                GROUP BY m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk														
                                ORDER BY m_data_pribadi.nim, m_data_pribadi.nama_mahasiswa, t_billing_detail.kode_mtk)) as t														
                join m_program_studi ps on t.kode_program_studi=ps.kode_program_studi														
                join m_fakultas fk on ps.kode_fakultas=fk.kode_fakultas    														
                group by fk.singkatan														
                ORDER BY fk.kode_fakultas'														
                );
            
            $result_pbb_kelas_sipas = DB::connection('mysql5')
            ->select('SELECT z.kode_fakultas,									
            (CASE WHEN z.kode_fakultas= 1 THEN REPLACE (z.kode_fakultas,1,"FKIP") 									
            WHEN z.kode_fakultas= 2 THEN REPLACE (z.kode_fakultas,2,"FST") 									
            WHEN z.kode_fakultas= 3 THEN REPLACE (z.kode_fakultas,3,"FHISIP") 									
            WHEN z.kode_fakultas= 4 THEN REPLACE (z.kode_fakultas,4,"FE")									
            ELSE z.kode_fakultas END) AS Fakultas,									
            count(*) hitung_hasil from									
            ((select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas									
            from z_t_surat_upbjj as a									
            join z_tutorial as b on a.idtutorial=b.idtutorial									
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor									
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 									
            join z_dp_tutor as e on a.idtutor=e.idtutor and e.status_tutor=1									
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 									
            where   a.masa= '.$search.'  and a.keterangan_izin_kelas like "%wajib%"									
            and a.status_approval="YA" AND a.pilihan in (1,2)									
            and d.pilihan=a.pilihan									
             order by a.kode_upbjj)									
             union									
              (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas									
            from z_t_surat_upbjj as a									
            join z_tutorial as b on a.idtutorial=b.idtutorial									
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor									
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 									
            join z_dp_tutor_pps as e on a.idtutor=e.idtutor and e.status_tutor= 1									
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 									
            where   a.masa= '.$search.' and a.keterangan_izin_kelas like "%wajib%"									
            and a.status_approval="YA" AND a.pilihan in (1,2)									
            and d.pilihan=a.pilihan									
             order by a.kode_upbjj)									
            union									
            (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.status,a.kode_fakultas									
            from z_t_surat_upbjj as a									
            join z_tutorial as b on a.idtutorial=b.idtutorial									
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor									
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 									
            join z_dp_pembimbing as e on a.idtutor=e.idpembimbing and e.status=1									
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 									
            where   a.masa='.$search.' and a.keterangan_izin_kelas like "%wajib%"									
            and a.status_approval="YA" AND a.pilihan in (1,2)									
            and d.pilihan=a.pilihan									
             order by a.kode_upbjj)) as z									
             group by z.kode_fakultas									
            ');

return view('users.pbb.dashboardsipasresult')->with(compact('result_pbb_jumlah_peserta_nim','result_pbb_jumlah_mata_kuliah_sipas','result_pbb_kelas_sipas','search'));
        }

    }

    public function searchtuwebpps(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('get'))
        {
            $search = $request->get('search');

        $pbb_jumlah_kelas_pps=DB::connection('mysql5')
        ->select('SELECT count(DISTINCT z.kelas) juml from						
        (select s.kode_upbjj As category_UPBJJ, t.kode_mtk,s.idtutor,d.idtutorial, d.kelas						
        from z_tutorial_detail d						
        join z_tutorial_pps t on t.idtutorial=d.idtutorial						
        join m_mata_kuliah m on t.kode_mtk=m.kode_mtk						
        join z_t_surat_upbjj s on d.idtutorial=s.idtutorial and d.idtutor=s.idtutor and d.masa=s.masa 						
        and s.status_approval="YA" 						
        and s.pilihan=d.pilihan						
        where d.masa=20211 and d.pilihan in (3)						
        union						
        select s.kode_upbjj As category_UPBJJ, t.kode_mtk,s.idtutor,d.idtutorial, d.kelas						
        from z_tutorial_detail d						
        join z_tutorial_online t on t.idtutorial_online=d.idtutorial						
        join m_mata_kuliah m on t.kode_mtk=m.kode_mtk						
        join z_t_surat_upbjj s on d.idtutorial=s.idtutorial and d.idtutor=s.idtutor and d.masa=s.masa 						
        and s.status_approval="YA" 						
        and s.pilihan=d.pilihan						
        where d.masa=20211 and d.pilihan in (4)) as z ;	
        ');
        
        $pbb_jumlah_nim_pps=DB::connection('mysql5')
        ->select('SELECT count(z.nim) tota from							
        ((select s.kode_upbjj As category_UPBJJ, t.kode_mtk, d.kelas,tm.nim							
        from z_tutorial_detail d							
        join z_tutorial_pps t on t.idtutorial=d.idtutorial							
        join m_mata_kuliah m on t.kode_mtk=m.kode_mtk							
        join z_t_surat_upbjj s on d.idtutorial=s.idtutorial and d.idtutor=s.idtutor and d.masa=s.masa 							
        join z_tutorial_mhs as tm on tm.idtutorial=s.idtutorial and tm.idtutor=s.idtutor and tm.masa=s.masa 							
        and s.status_approval="YA" 							
        and s.pilihan=d.pilihan							
        where d.masa=20211 and d.pilihan in (3))							
        union							
        (select s.kode_upbjj As category_UPBJJ, t.kode_mtk, d.kelas,tm.nim							
        from z_tutorial_detail d							
        join z_tutorial_online t on t.idtutorial_online=d.idtutorial							
        join m_mata_kuliah m on t.kode_mtk=m.kode_mtk							
        join z_t_surat_upbjj s on d.idtutorial=s.idtutorial and d.idtutor=s.idtutor and d.masa=s.masa 							
        join z_tutorial_mhs as tm on tm.idtutorial=s.idtutorial and tm.idtutor=s.idtutor and tm.masa=s.masa 							
        and s.status_approval="YA"							
        and s.pilihan=d.pilihan							
        where d.masa=20211 and d.pilihan in (4) ))as z	
        ');

        $pbb_jumlah_mtk_pps=DB::connection('mysql5')
        ->select('SELECT count(distinct z.kode_mtk) totall from									
        ((select s.kode_upbjj As category_UPBJJ, t.kode_mtk, concat(m.nama_mtk," - ",t.kode_mtk,".",d.idtutorial,".",d.kelas) as fullname, concat(t.kode_mtk,".",d.idtutorial,".",d.kelas) as shortname									
        from z_tutorial_detail d									
        join z_tutorial_pps t on t.idtutorial=d.idtutorial									
        join m_mata_kuliah m on t.kode_mtk=m.kode_mtk									
        join z_t_surat_upbjj s on d.idtutorial=s.idtutorial and d.idtutor=s.idtutor and d.masa=s.masa 									
        and s.status_approval="YA" 									
        and s.pilihan=d.pilihan									
        where d.masa=20211 and d.pilihan in (3))									
        union									
        (select s.kode_upbjj As category_UPBJJ, t.kode_mtk, concat(m.nama_mtk," - ",t.kode_mtk,".",d.idtutorial,".",d.kelas) as fullname, concat(t.kode_mtk,".",d.idtutorial,".",d.kelas) as shortname									
        from z_tutorial_detail d									
        join z_tutorial_online t on t.idtutorial_online=d.idtutorial									
        join m_mata_kuliah m on t.kode_mtk=m.kode_mtk									
        join z_t_surat_upbjj s on d.idtutorial=s.idtutorial and d.idtutor=s.idtutor and d.masa=s.masa 									
        and s.status_approval="YA"									
        and s.pilihan=d.pilihan									
        where d.masa=20211 and d.pilihan in (4) ))as z									
        ');

        return view('users.pbb.dashboardppsresult')->with(compact('pbb_jumlah_kelas_pps','pbb_jumlah_nim_pps','pbb_jumlah_mtk_pps','search'));
        }

    }

}
