<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    public $timestamps=false;
    public $incrementing = false;
    protected $table="solusi";
    protected $fillable=['id', 'penyakit_id', 'deskripsi'];

    public function penyakit(){
        return $this->belongsTo('App\Models\Penyakit');
    }

}
