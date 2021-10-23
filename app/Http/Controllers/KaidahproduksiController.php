<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\KaidahProduksi;

class KaidahproduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datagej = Gejala::all();
        $datapen = Penyakit::all();
        $data = KaidahProduksi::all();
        return view('kaidah_produksi/index', compact('datagej', 'datapen','data'));
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
        for ($i = 0; $i < count($request->gejala_id); $i++){
            KaidahProduksi::create([
               'penyakit_id'=>$request->penyakit_id,
               'gejala_id'=>$request->gejala_id[$i],
           ]);
       }
        return redirect()->route('kaidah_produksi.index')->with('berhasil', 'Data berhasil di tambah');
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
        $datapen = Penyakit::all();
        $datagej = Gejala::all();
        $data = KaidahProduksi::where('id',$id)->first();
        return view('kaidah_produksi.edit', compact('datapen','data','datagej'));
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
        KaidahProduksi::where('id',$id)->update([
                'penyakit_id'=>$request->penyakit_id,
                'gejala_id' => $request->gejala_id,
            ]
        );
        return redirect()->route('kaidah_produksi.index')->with('berhasil', 'Data berhasil di sunting');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KaidahProduksi::where('id',$id)->delete();
        return redirect()->route('kaidah_produksi.index')->with('berhasil', 'Data berhasil di hapus');
    }
}
