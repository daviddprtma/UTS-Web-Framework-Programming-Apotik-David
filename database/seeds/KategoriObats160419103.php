<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriObats160419103 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategoriobat_160419103')->insert(['nama' => 'Batuk']);
        DB::table('kategoriobat_160419103')->insert(['nama' => 'Mata']);
        DB::table('kategoriobat_160419103')->insert(['nama' => 'NyeriOtot']);
    }
}
