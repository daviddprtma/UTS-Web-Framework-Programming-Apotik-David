<?php

namespace App\Http\Controllers;

use App\Category160419103;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('kategoriobat_160419103') -> get();
        return view('categories.index',compact('data'));
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
     * @param  \App\Category160419103  $category160419103
     * @return \Illuminate\Http\Response
     */
    public function show(Category160419103 $category160419103)
    {
        //
        $data = DB::table('kategoriobat_160419103')
        -> join('obat_160419103','kategoriobat_160419103.id','=','obat_160419103.kategoriobat_id')
        -> where('obat_160419103.kategoriobat_id',$category160419103->id) 
        -> get();

        return view('categories.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category160419103  $category160419103
     * @return \Illuminate\Http\Response
     */
    public function edit(Category160419103 $category160419103)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category160419103  $category160419103
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category160419103 $category160419103)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category160419103  $category160419103
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category160419103 $category160419103)
    {
        //
    }

    public function tampilkanObatBatuk(){
        $tampilObatBatuk = Category160419103::find(1);
        return $this->show($tampilObatBatuk);
    }

    public function tampilkanDaftarKategori(){
        $result = DB::table('kategoriobat_160419103')
        -> join('obat_160419103','kategoriobat_160419103.id','=','obat_160419103.kategoriobat_id')
        ->select('kategoriobat_160419103.id','kategoriobat_160419103.nama',DB::raw('SUM((obat_160419103.harga * obat_160419103.stok)) AS total'))
        ->groupBy('kategoriobat_160419103.id','kategoriobat_160419103.nama')
        ->orderBy('total','asc')
        -> get();

        return view('report.tampildaftarkategori',compact('result'));
    }
}
