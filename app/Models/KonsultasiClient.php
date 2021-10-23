<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsultasiClient extends Model
{
    protected $table = "soal";

    public $incrementing = false;

    protected $fillable = ['id','soal'];
}
