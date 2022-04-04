<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKategoriobatidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('obat_160419103', function (Blueprint $table) {
            $table->unsignedBigInteger('kategoriobat_id');
            $table -> foreign('kategoriobat_id') -> references('id') -> on('kategoriobat_160419103');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('obat_160419103', function (Blueprint $table) {
            $table -> dropForeign(['kategoriobat_id']);
            $table -> dropColumn('kategoriobat_id');
        });
    }
}
