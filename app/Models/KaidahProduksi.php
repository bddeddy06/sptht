<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KaidahProduksi extends Model
{
    public $timestamps=false;
    public $incrementing = false;
    protected $table="kaidah_produksi";
    protected $fillable=['penyakit_id', 'gejala_id'];

    public function penyakit(){
        return $this->belongsTo('App\Models\Penyakit');
    }
    public function gejala(){
        return $this->belongsTo('App\Models\Gejala');
    }

}
