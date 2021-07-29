<?php

namespace App\Http\Controllers;

use DB;
use App\Jadwal;
use Alert;
use App\Exports\JadwalExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ControllerJadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::orderby('tanggal', 'DESC')->paginate(10);
        return view('users.admin.jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $request->validate([
            'tanggal' => 'required',

            'nama_rapat' => 'required||max:150',
            'tempat' => 'required',
            'waktu' => 'required',



        ]);

        $jadwal = new Jadwal;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->nama_rapat = $request->nama_rapat;
        $jadwal->tempat = $request->tempat;
        $jadwal->waktu = $request->waktu;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->status = $request->status;

        if ($request->hasFile('undangan')) {
            $filenameWithext = $request->file('undangan')->getClientOriginalName();

            $filename = $filenameWithext;
            $filenametostore = $filename;
            // $extension = $request->file('undangan')->getClientOriginalExtension();

            $path = $request->file('undangan')->storeAs('pdf/undangan', $filenametostore);
        }
        if (isset($filenametostore)) {
            $jadwal->undangan = $filenametostore;
        } else {
            $jadwal->undangan = '';
        }
        // $jadwal->undangan = $filename ;



        if ($request->hasFile('risalah')) {
            $filenameWithext = $request->file('risalah')->getClientOriginalName();

            $filename = $filenameWithext;
            $filenametosave = $filename;
            // $extension = $request->file('undangan')->getClientOriginalExtension();

            $path = $request->file('risalah')->storeAs('pdf/risalah', $filenametosave);
        }

        // $jadwal->undangan = $filename ;
        if (isset($filenametosave)) {
            $jadwal->risalah = $filenametosave;
        } else {
            $jadwal->risalah = '';
        }


        $jadwal->save();


        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');


        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $jadwal = DB::table('jadwal')->where('id_rapat',$id)->get();
    //     return view('jadwal.index', compact('jadwal'));

    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = DB::table('jadwal')->where('id_rapat', $id)->get();
        return view('users.admin.jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'tanggal' => 'required',

            'nama_rapat' => 'required||max:150',
            'tempat' => 'required',
            'waktu' => 'required'


        ]);

        if ($request->hasFile('risalah') && $request->hasFile('undangan')) {
            //hapus pdf undangan
            $jadwal = Jadwal::where('id_rapat', $request->id)->first();
            File::delete(storage_path() . '/app/pdf/undangan/' . $jadwal->undangan);
            File::delete(storage_path() . '/app/pdf/risalah/' . $jadwal->risalah);

            //upload data risalah
            $filenameWithext = $request->file('risalah')->getClientOriginalName();

            $filename = $filenameWithext;
            $filenametostore = $filename;
            // $extension = $request->file('undangan')->getClientOriginalExtension();

            $path = $request->file('risalah')->storeAs('pdf/risalah', $filenametostore);
            //-----------------------------------------------------------------------------

            //upload file undangan
            $filenametext = $request->file('undangan')->getClientOriginalName();

            $file = $filenametext;
            $filenametosave = $file;
            // $extension = $request->file('undangan')->getClientOriginalExtension();

            $path = $request->file('undangan')->storeAs('pdf/undangan', $filenametosave);
            //--------------------------------------------------------------------------------

            DB::table('jadwal')->where('id_rapat', $request->id)->update([
                'nama_rapat' => $request->nama_rapat,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
                'risalah' => $request->risalah = $filename,
                'undangan' => $request->undangan = $file
            ]);
        } elseif ($request->hasFile('undangan')) {

            //hapus pdf undangan
            $jadwal = Jadwal::where('id_rapat', $request->id)->first();
            File::delete(storage_path() . '/app/pdf/undangan/' . $jadwal->undangan);

            //upload data undangan
            $filenameWithext = $request->file('undangan')->getClientOriginalName();

            $filename = $filenameWithext;
            $filenametostore = $filename;
            // $extension = $request->file('undangan')->getClientOriginalExtension();

            $path = $request->file('undangan')->storeAs('pdf/undangan/', $filenametostore);

            DB::table('jadwal')->where('id_rapat', $request->id)->update([
                'nama_rapat' => $request->nama_rapat,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
                'undangan' => $request->undangan = $filename
            ]);
        } elseif ($request->hasFile('risalah')) {

            //hapus pdf risalah
            $jadwal = Jadwal::where('id_rapat', $request->id)->first();
            File::delete(storage_path() . '/app/pdf/risalah/' . $jadwal->risalah);

            //upload data risalah
            $filenameWithext = $request->file('risalah')->getClientOriginalName();

            $filename = $filenameWithext;
            $filenametostore = $filename;
            // $extension = $request->file('undangan')->getClientOriginalExtension();

            $path = $request->file('risalah')->storeAs('pdf/risalah', $filenametostore);

            DB::table('jadwal')->where('id_rapat', $request->id)->update([
                'nama_rapat' => $request->nama_rapat,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
                'risalah' => $request->risalah = $filename
            ]);
        } else {
            //edit  tanpa file
            DB::table('jadwal')->where('id_rapat', $request->id)->update([
                'nama_rapat' => $request->nama_rapat,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'keterangan' => $request->keterangan,
                'status' => $request->status
            ]);
        }


        Alert::success('Berhasil', 'Data Berhasil Diubah');

        return redirect('/jadwal');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy($id)
    {



        //hapus file undangan 
        $jadwal = Jadwal::where('id_rapat', $id)->first();
        File::delete(storage_path() . '/app/pdf/undangan/' . $jadwal->undangan);

        //hapus file risalah
        $jadwal = Jadwal::where('id_rapat', $id)->first();
        File::delete(storage_path() . '/app/pdf/risalah/' . $jadwal->risalah);

        //hapus data
        DB::table('jadwal')->where('id_rapat', $id)->delete();

        alert()->success('Data Dihapus', 'Data Berhasil Dihapus')->showConfirmButton('Confirm', '#3085d6');





        return redirect('/jadwal');
    }



    function excel()
    {
        return Excel::download(new JadwalExport, 'Jadwal Rencana Rapat.xlsx');
    }
}
