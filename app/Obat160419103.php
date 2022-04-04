<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat160419103 extends Model
{
    //
    protected $table = "obat_160419103";
    public function category(){
        return $this->belongsTo('App\Category160419103.php',"kategoriobat_id");
    }
}
