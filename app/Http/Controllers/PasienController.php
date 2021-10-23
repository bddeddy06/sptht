<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
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
        $data = Pasien::all();
        return view('pasien/index', compact('data'));
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
        Pasien::create([
            'id'=>$request->id,
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'pekerjaan'=>$request->pekerjaan,
            'alamat'=>$request->alamat,
        ]);
        return redirect()->route('pasien.index')->with('berhasil', 'Data berhasil di tambah');
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
        $data = Pasien::where('id',$id)->first();
        return view('pasien.edit', compact('data'));
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
        Pasien::where('id',$id)->update([
                'id'=>$request->id,
                'nama' => $request->nama,
                'umur'=>$request->umur,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'pekerjaan'=>$request->pekerjaan,
                'alamat'=>$request->alamat,
            ]
        );
        return redirect()->route('pasien.index')->with('berhasil', 'Data berhasil di sunting');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::where('id',$id)->delete();
        return redirect()->route('pasien.index')->with('berhasil', 'Data berhasil di hapus');
    }
}
