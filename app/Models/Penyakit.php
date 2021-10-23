<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = "penyakit";

    public $incrementing = false;

    protected $fillable = ['id','nama', 'deskripsi'];

}
