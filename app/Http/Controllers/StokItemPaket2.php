<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use \App\StokItemPaket;


class StokItemPaket2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->admin == 2) {
            return redirect(route('admin'));
        } else {
            ini_set('max_execution_time', 300);
            $stokbawah300 = DB::connection('mysql3')
                ->select('select a.kode_barang, a.nama_barang, a.edisi, sum(saldo_akhir) as saldo_akhir_item, sum(stok_puslaba) as saldo_akhir_paket
        from v_stok_all_item_non_lokasi a
        JOIN v_stok_all_paket_non_lokasi b
        ON a.kode_barang = b.kode_paket
        AND a.nama_barang = b.nama_paket
        
        where saldo_akhir < 300
        
        group by kode_barang,nama_barang,edisi
        
        order by saldo_akhir ASC
         ');

            $stokantara = DB::connection('mysql3')
                ->select('select a.kode_barang, a.nama_barang, a.edisi, sum(saldo_akhir) as saldo_akhir_item, sum(stok_puslaba) as saldo_akhir_paket
       
        from v_stok_all_item_non_lokasi a
        JOIN v_stok_all_paket_non_lokasi b
        ON a.kode_barang = b.kode_paket
        AND a.nama_barang = b.nama_paket
       
        where saldo_akhir between 301 and 500
        
        group by kode_barang,nama_barang,edisi
        
        order by saldo_akhir ASC
         ');

            $stoklebih500 = DB::connection('mysql3')
                ->select('select a.kode_barang, a.nama_barang, a.edisi, sum(saldo_akhir) as saldo_akhir_item, sum(stok_puslaba) as saldo_akhir_paket
        
        from v_stok_all_item_non_lokasi a
        JOIN v_stok_all_paket_non_lokasi b
        ON a.kode_barang = b.kode_paket
        AND a.nama_barang = b.nama_paket
        
        where saldo_akhir > 501
        
        group by kode_barang,nama_barang,edisi
        
        order by saldo_akhir ASC
         ');


            return view('users/admin/stokitempaket2')
                ->with(compact('stokbawah300'))
                ->with(compact('stokantara'))
                ->with(compact('stoklebih500'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
