<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
//    public $timestamps=false;
    public $incrementing = false;
    protected $table="pertanyaan";
    protected $fillable=['id', 'gejala_id', 'jawaban'];

    public function gejala(){
        return $this->belongsTo('App\Models\Gejala');
    }
}
