<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    public $timestamps=false;
    public $incrementing = false;
    protected $table="diagnosa";
    protected $fillable=['id','penyakit_id', 'gejala_id','mb','md','cf'];

    public function penyakit(){
        return $this->belongsTo('App\Models\Penyakit');
    }
    public function gejala(){
        return $this->belongsTo('App\Models\Gejala');
    }
}
