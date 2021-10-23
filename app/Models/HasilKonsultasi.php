<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilKonsultasi extends Model
{
    public $timestamps=false;
    public $incrementing = false;
    protected $table="hasil_konsultasi";
    protected $fillable=['penyakit_id', 'gejala_id','diagnosa_id','mb','md','cf'];

    public function penyakit(){
        return $this->belongsTo('App\Models\Penyakit');
    }
    public function gejala(){
        return $this->belongsTo('App\Models\Gejala');
    }
    public function diagnosa(){
        return $this->belongsTo('App\Models\Diagnosa');
    }
}
