<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Diagnosa;
use App\Models\HasilKonsultasi;

class HasilkonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datagej = Gejala::all();
        $datapen = Penyakit::all();
        $datadia = Diagnosa::all();
        $data = HasilKonsultasi::all();
        return view('hasil_konsultasi/index', compact('datagej', 'datapen','data','datadia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HasilKonsultasi::create([
            'id'=>$request->id,
            'penyakit_id'=>$request->penyakit_id,
            'gejala_id'=>$request->gejala,
            'diagnosa_id'=>$request->diagnosa_id,
            'cf'=>$request->cf,
        ]);
        return redirect()->route('hasil_konsultasi.index')->with('berhasil', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
