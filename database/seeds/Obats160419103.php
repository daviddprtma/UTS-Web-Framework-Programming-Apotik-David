<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Obats160419103 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'OBH Combi',
             'stok' => 360,
             'harga' => 8000,
             'kategoriobat_id' => 1]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Woods',
             'stok' => 250,
             'harga' => 16000,
             'kategoriobat_id' => 1]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Siladex',
             'stok' => 100,
             'harga' => 8000,
             'kategoriobat_id' => 1]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Konidin',
             'stok' => 200,
             'harga' => 14000,
             'kategoriobat_id' => 1]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Komix',
             'stok' => 80,
             'harga' => 6000,
             'kategoriobat_id' => 1]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Tetes Mata Rohto',
             'stok' => 145,
             'harga' => 17000,
             'kategoriobat_id' => 2]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Allegram Refresh',
             'stok' => 500,
             'harga' => 10000,
             'kategoriobat_id' => 2]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Lion Smile',
             'stok' => 240,
             'harga' => 23000,
             'kategoriobat_id' => 2]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Tetes Mata Visine',
             'stok' => 1000,
             'harga' => 17000,
             'kategoriobat_id' => 2]);
DB::table('obat_160419103') -> insert(
                 ['nama_obat' => 'Blink Contacts',
                  'stok' => 450,
                  'harga' => 340000,
                  'kategoriobat_id' => 2]);
DB::table('obat_160419103') -> insert(
                     ['nama_obat' => 'COX 2 Inhibitor',
                      'stok' => 1000,
                      'harga' => 450000,
                      'kategoriobat_id' => 3]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Antidepresan',
             'stok' => 450,
             'harga' => 70000,
             'kategoriobat_id' => 3]);
DB::table('obat_160419103') -> insert(
                 ['nama_obat' => 'Opioid',
                  'stok' => 450,
                  'harga' => 45000,
                  'kategoriobat_id' => 3]);
DB::table('obat_160419103') -> insert(
                     ['nama_obat' => 'Relaksan Otot',
                      'stok' => 150,
                      'harga' => 56000,
                      'kategoriobat_id' => 3]);
DB::table('obat_160419103') -> insert(
            ['nama_obat' => 'Ibuprofen',
             'stok' => 450,
             'harga' => 70000,
             'kategoriobat_id' => 3]);

    }
}
