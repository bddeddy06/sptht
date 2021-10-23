<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class SubmitpasienController extends Controller
{
    public function store(Request $request)
    {
        Pasien::create([
            'id'=>$request->id,
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'pekerjaan'=>$request->pekerjaan,
            'alamat'=>$request->alamat,
        ]);
        $idpasien = $request->id;
        return redirect()->route('konsultasi.index', ['id'=>$idpasien]);
    }

}
