<?php

namespace App\Http\Controllers;
use App\Jadwal;
use Illuminate\Http\Request;
use DB;
Use Alert;

class FrontendController extends Controller
{
    public function index(){
        $jadwals = Jadwal::orderby('tanggal','DESC')->paginate(10);
        return view('users.admin.jadwal.frontend.frontend', compact('jadwals'));
    }

    public function pdf($id){
        //    $jadwal = Jadwal::all();
        //    foreach ($jadwal as $jadwal){
        //     return response()->download(storage_path() . '/app/pdf/' . $jadwal->undangan , $jadwal->undangan , [], 'inline');
        //    }
    
        $jadwal = DB::table('jadwal')->where('id_rapat',$id)->get();
            foreach ($jadwal as $jadwal)
            $filename = storage_path() . '/app/pdf/undangan/' . $jadwal->undangan;
            {   
                if(file_exists($filename)){
                return response()->download(storage_path() . '/app/pdf/undangan/' . $jadwal->undangan , $jadwal->undangan , [], 'inline');
                }
                else{
                    Alert::success('Berhasil', 'Data Tidak Ada yang Didownload');
                    return redirect('/jadwal');
                }
            }
    
        }

        public function pdfrisalah($id)
        {
            $jadwal = DB::table('jadwal')->where('id_rapat',$id)->get();
            foreach ($jadwal as $jadwal)
            $filename = storage_path() . '/app/pdf/risalah/' . $jadwal->risalah;
            {   
                if(file_exists($filename)){
                return response()->download(storage_path() . '/app/pdf/risalah/' . $jadwal->risalah , $jadwal->risalah , [], 'inline');
                }
                else{
                    Alert::success('Berhasil', 'Data Tidak Ada yang Didownload');
                    return redirect('/jadwal');
                }
            }
        }

}
