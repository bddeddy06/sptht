<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solusi;
use App\Models\Penyakit;

class SolusiController extends Controller
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
        $datasol = Solusi::all();
        $datapen = Penyakit::all();
        return view('solusi/index', compact('datasol', 'datapen'));
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
        Solusi::create([
            'id'=>$request->id,
            'penyakit_id'=>$request->penyakit_id,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect()->route('solusi.index')->with('berhasil', 'Data berhasil di tambah');
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
        $data = Solusi::where('id',$id)->first();
        return view('solusi.edit', compact('datapen','data'));
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
        Solusi::where('id',$id)->update([
                'id'=>$request->id,
                'penyakit_id' => $request->penyakit_id,
                'deskripsi'=>$request->deskripsi,
            ]
        );
        return redirect()->route('solusi.index')->with('berhasil', 'Data berhasil di sunting');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solusi::where('id',$id)->delete();
        return redirect()->route('solusi.index')->with('berhasil', 'Data berhasil di hapus');
    }
}
