<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Gejala;

class PertanyaanController extends Controller
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
        $data = Pertanyaan::all();
        return view('pertanyaan/index', compact('data','datagej'));
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
        Pertanyaan::create([
            'id'=>$request->id,
            'gejala_id'=>$request->gejala_id,
            'jawaban'=>$request->jawaban,
        ]);
        return redirect()->route('pertanyaan.index')->with('berhasil', 'Data berhasil di tambah');
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
        $datagej = Gejala::all();
        $data = Pertanyaan::where('id',$id)->first();
        return view('pertanyaan.edit', compact('datagej','data'));
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
        Pertanyaan::where('id',$id)->update([
                'id'=>$request->id,
                'gejala_id' => $request->gejala_id,
                'jawaban'=>$request->jawaban,
            ]
        );
        return redirect()->route('pertanyaan.index')->with('berhasil', 'Data berhasil di sunting');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanyaan::where('id',$id)->delete();
        return redirect()->route('pertanyaan.index')->with('berhasil', 'Data berhasil di hapus');
    }
}
