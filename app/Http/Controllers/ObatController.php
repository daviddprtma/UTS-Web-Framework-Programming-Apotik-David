<?php

namespace App\Http\Controllers;

use App\Obat160419103;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Obat160419103  $obat160419103
     * @return \Illuminate\Http\Response
     */
    public function show(Obat160419103 $obat160419103)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat160419103  $obat160419103
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat160419103 $obat160419103)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat160419103  $obat160419103
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat160419103 $obat160419103)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat160419103  $obat160419103
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat160419103 $obat160419103)
    {
        //
    }

    public function dataObat(){
        $dataObat = DB::table('obat_160419103 as o')
        -> join('kategoriobat_160419103 as ko','o.kategoriobat_id','=','ko.id')
        -> select('o.id','o.nama_obat','o.stok','o.harga','o.kategoriobat_id','ko.nama') 
        -> get();
        return view('obat.index',compact("dataObat"));
    }

    public function stokObatDikit(){
        $data = DB::table('obat_160419103')
        -> orderBy('stok','asc')
        -> limit(1)
        -> get();

        // dd($data);
        return view('report.showobatdikit',compact('data'));
    }
}
