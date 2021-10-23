<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Pasien;
use App\Models\Diagnosa;

class BerandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $penyakitcount= Penyakit::all()->count('id');
        $gejalacount= Gejala::all()->count('id');
        $pasiencount= Pasien::all()->count('id');
        $diagnosacount= Diagnosa::all()->count('id');
        return view('beranda.index',compact ('penyakitcount', 'gejalacount','pasiencount','diagnosacount'));

    }
}
