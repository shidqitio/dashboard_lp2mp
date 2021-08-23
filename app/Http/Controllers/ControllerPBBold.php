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
  return view('users.pbb.dashboardtuwebresult')->with(compact('result_pbb_jumlah_matkul_tuweb_atpem','result_pbb_jumlah_peserta_nim_tuweb_atpem','search'));

            }
        }
    }

    public function searchtuwebsipas(Request $request)
    {
        $method = $request->method();
        
        if ($request->isMethod('get'))
        {
            $search = $request->get('search');

            $result_pbb_jumlah_matkul_tuweb_sipas=DB::connection('mysql5')
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
    
    
            $result_pbb_jumlah_peserta_nim_tuweb_sipas=DB::connection('mysql5')
            ->select('SELECT z.kode_fakultas,								
            (CASE WHEN z.kode_fakultas=1 THEN REPLACE (z.kode_fakultas,1,"FKIP") 								
            WHEN z.kode_fakultas=2 THEN REPLACE (z.kode_fakultas,2,"FST") 								
            WHEN z.kode_fakultas=3 THEN REPLACE (z.kode_fakultas,3,"FHISIP") 								
            WHEN z.kode_fakultas=4 THEN REPLACE (z.kode_fakultas,4,"FE")								
            ELSE z.kode_fakultas END) AS Fakultas,								
            count(*) semua from								
            ((select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.`status`,a.kode_fakultas								
            from z_t_surat_upbjj as a								
            join z_tutorial as b on a.idtutorial=b.idtutorial								
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor								
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 								
            join z_dp_tutor as e on a.idtutor=e.idtutor and e.status_tutor=1								
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 								
            where   a.masa='.$search.'  and a.keterangan_izin_kelas like "%wajib%"								
            and a.status_approval="YA" AND a.pilihan in (1,2)								
            and d.pilihan=a.pilihan								
            order by a.kode_upbjj)								
            union								
            (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.`status`,a.kode_fakultas								
            from z_t_surat_upbjj as a								
            join z_tutorial as b on a.idtutorial=b.idtutorial								
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor								
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 								
            join z_dp_tutor_pps as e on a.idtutor=e.idtutor and e.status_tutor=1								
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 								
            where   a.masa='.$search.' and a.keterangan_izin_kelas like "%wajib%"								
            and a.status_approval="YA" AND a.pilihan in (1,2)								
            and d.pilihan=a.pilihan								
            order by a.kode_upbjj)								
            union								
            (select distinct a.kode_upbjj,f.nama_upbjj, a.idtutor,a.idtutorial,b.kode_mtk,c.kelas,d.`status`,a.kode_fakultas								
            from z_t_surat_upbjj as a								
            join z_tutorial as b on a.idtutorial=b.idtutorial								
            join z_tutorial_mhs as c on a.masa=c.masa and a.idtutorial=c.idtutorial and a.idtutor=c.idtutor								
            join z_tutorial_detail as d on c.kelas=d.kelas and a.idtutorial=d.idtutorial and a.idtutor=d.idtutor and a.masa=d.masa 								
            join z_dp_pembimbing as e on a.idtutor=e.idpembimbing and e.`status`=1								
            join m_upbjj as f on a.kode_upbjj=f.kode_upbjj 								
            where   a.masa='.$search.' and a.keterangan_izin_kelas like "%wajib%"								
            and a.status_approval="YA" AND a.pilihan in (1,2)								
            and d.pilihan=a.pilihan								
            order by a.kode_upbjj)) as z								
            group by z.kode_fakultas
            ');

return view('users.pbb.dashboardsipasresult')->with(compact('result_pbb_jumlah_matkul_tuweb_sipas','result_pbb_jumlah_peserta_nim_tuweb_sipas','search'));
        }

    }

}
