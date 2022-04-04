<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category160419103 extends Model
{
    //
    protected $table = "kategoriobat_160419103";
    public function obat(){
        return $this->hasMany('App\Obat160419103.php');
    }
}
