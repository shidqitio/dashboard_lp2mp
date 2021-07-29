<?php

namespace App\Http\Controllers;

use App\Events;
use App\Exports\KalenderExport;
use App\Kalender;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ControllerKalender extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

                return view('users.admin.kalender', ['viewall' => $search]);
            } elseif ($request->has('export')) {
            } else {
                $search = DB::table('kalender')
                    ->select('*')
                    ->get();
                return view('users.admin.kalender', ['viewall' => $search]);
            }
        } else {
            //select all
            $viewall = DB::table('kalender')
                ->select('*')
                ->get();
            $user = DB::SELECT("select users.id, users.name, users.email, roles.id, roles.role_name from users join role_user on users.id = role_user.user_id 
            join roles on role_user.role_id = roles.id");
            return view('users.admin.kalender', ['viewall' => $viewall, 'user' => $user]);
        }
    }

    public function downloadexcel()
    {
        return Excel::download(new KalenderExport, 'Kalender.xls');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kalender = new Kalender();
        $kalender->nama_kegiatan = $request->nama_kegiatan;
        $kalender->unit = $request->unit;
        $kalender->penanggung_jawab = $request->penanggung_jawab;
        $kalender->color = $request->color;
        $kalender->tanggal_mulai = $request->tanggal_mulai;
        $kalender->tanggal_selesai = $request->tanggal_selesai;
        $kalender->save();
        if ($kalender->save()) {
            $event = new Events();
            $event->title = $request->nama_kegiatan;
            $event->color = $request->color;
            $event->start_date = $request->tanggal_mulai;
            $event->end_date = $request->tanggal_selesai;
            $event->save();
            if ($event->save()) {
                Alert::success('berhasil', 'Data Berhasil Ditambahkan');
            }
        } else {
            Alert::error('Gagal', 'Data Gagal Ditambahkan');
        }
        if (auth()->user()->role == "PUSLABA") {
            return redirect('/kalender');
        }
        if (auth()->user()->role == "PUSJIAN") {
            return redirect('/kalenderpusjian');
        }
        if (auth()->user()->role == "PBB") {
            return redirect('/kalenderpbb');
        }
        if (auth()->user()->role == "P2M2") {
            return redirect('/kalenderp2m2');
        } else {
            return redirect('/viewall');
        }
    }

    public function update_kalender(Request $request, $id)
    {
        //ambil id 
        $update = DB::table('kalender')
            ->select('*')
            ->where('id', $id)->get();
        foreach ($update as $update) {
            $update_id = (int)$update->id;
        }
        //database 
        $update_data = DB::table('kalender')->where('id', $update_id)->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'unit' => implode(', ', $request->unit),
            'penanggung_jawab' => $request->penanggung_jawab,
            'color' => $request->color,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai
        ]);
        if ($update_data) {
            $update_event = DB::table('events')->where('id', $update_id)->update([
                'title' => $request->nama_kegiatan,
                'color' => $request->color,
                'start_date' => $request->tanggal_mulai,
                'end_date' => $request->tanggal_selesai
            ]);
            Alert::success('berhasil', 'Data Berhasil Diupdate');
            if ($update_event) {
                if (auth()->user()->role == "PUSLABA") {
                    return redirect('/kalender');
                }
                if (auth()->user()->role == "PUSJIAN") {
                    return redirect('/kalenderpusjian');
                }
                if (auth()->user()->role == "PBB") {
                    return redirect('/kalenderpbb');
                }
                if (auth()->user()->role == "P2M2") {
                    return redirect('/kalenderp2m2');
                } else {
                    return redirect('/viewall');
                }
            }
        } else
            Alert::Error('Gagal', 'Data Gagal Diupdate');
        if (auth()->user()->role == "PUSLABA") {
            return redirect('/kalender');
        }
        if (auth()->user()->role == "PUSJIAN") {
            return redirect('/kalenderpusjian');
        }
        if (auth()->user()->role == "PBB") {
            return redirect('/kalenderpbb');
        } else {
            if (auth()->user()->role == "P2M2") {
                return redirect('/kalenderp2m2');
            }
            return redirect('/viewall');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ambil id 
        $hapus = DB::table('kalender')
            ->select('id')
            ->where('id', $id)->get();
        foreach ($hapus as $hapus) {
            $hapusan = (int)$hapus->id;
        }
        //hapus data
        $hapus = DB::table('kalender')->where('id', $hapusan)->delete();
        if ($hapus) {
            $erase = DB::table('events')->where('id', $hapusan)->delete();
            if ($erase) {
                Alert::success('berhasil', 'Data Berhasil Dihapus');
                if (auth()->user()->role == "PUSLABA") {
                    return redirect('/kalender');
                }
                if (auth()->user()->role == "PUSJIAN") {
                    return redirect('/kalenderpusjian');
                }
                if (auth()->user()->role == "PBB") {
                    return redirect('/kalenderpbb');
                }
                if (auth()->user()->role == "P2M2") {
                    return redirect('/kalenderp2m2');
                } else {
                    return redirect('/viewall');
                }
            }
        } else
            Alert::Error('Gagal', 'Data Gagal Dihapus');
        if (auth()->user()->role == "PUSLABA") {
            return redirect('/kalender');
        }
        if (auth()->user()->role == "PUSJIAN") {
            return redirect('/kalenderpusjian');
        }
        if (auth()->user()->role == "PBB") {
            return redirect('/kalenderpbb');
        }
        if (auth()->user()->role == "P2M2") {
            return redirect('/kalenderp2m2');
        } else {
            return redirect('/viewall');
        }
    }
}
