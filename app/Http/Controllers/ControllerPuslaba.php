<?php

namespace App\Http\Controllers;

use App\Events;
use App\Exports\KalenderExport;
use App\Kalender;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ControllerPuslaba extends Controller
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

                return view('users.puslaba.kalenderplb', ['kalender' => $search]);
            } elseif ($request->has('export')) {
            } else {
                $search = DB::table('kalender')
                    ->select('*')
                    ->get();
                return view('users.puslaba.kalenderplb', ['kalender' => $search]);
            }
        } else {
            //select all
            $kalender = DB::table('kalender')
                ->select('*')
                ->get();
            return view('users.puslaba.kalenderplb', ['kalender' => $kalender]);
        }
    }

    // public function downloadexcelplb()
    // {
    //     return Excel::download(new KalenderExport, 'Kalender.xls');
    // }
}
