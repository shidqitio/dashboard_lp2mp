<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use \App\StokItemPaket;


class StokItemPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $stokitempaket = DB::connection('mysql3')
            ->select('select a.kode_barang, a.nama_barang, a.edisi, sum(saldo_akhir) as saldo_akhir_item ,sum(stok_puslaba) as saldo_akhir_paket
         from v_stok_all_item_non_lokasi a
         JOIN v_stok_all_paket_non_lokasi b
         ON a.kode_barang = b.kode_paket
         AND a.nama_barang = b.nama_paket
         
         group by kode_barang,nama_barang, a.edisi

         order by  saldo_akhir_item ASC
         ');


        return view('users/admin/stokitempaket', compact('stokitempaket'));
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
