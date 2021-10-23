<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "pasien";

    public $incrementing = false;

    protected $fillable = ['id','nama', 'umur','jenis_kelamin','pekerjaan','alamat'];
}
