<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = "gejala";

    public $incrementing = false;

    protected $fillable = ['id','nama'];
}
