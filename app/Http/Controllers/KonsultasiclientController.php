<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\KonsultasiClient;
use App\Models\Penyakit;
use App\Models\Soal;
class KonsultasiclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $maxIndex = KonsultasiClient::count('id');
        $datapen = Penyakit::all();
        $datapas = Pasien::find($request->id);
        $datasoal = KonsultasiClient::all();
        return view('konsultasi_client/index', compact('datapas', 'datapen','datasoal', 'maxIndex'));
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
//         $datapasien = Pasien::create([
//                         'id'=>$request->id,
//                         'nama'=>$request->nama,
//                         'umur'=>$request->umur,
//                         'jenis_kelamin'=>$request->jenis_kelamin,
//                         'pekerjaan'=>$request->pekerjaan,
//                         'alamat'=>$request->alamat,
//         ]);
//             for($i=0; $i < $request->countid; $i++){
//                 $data = array(
//                     'id'=>$request->id,
//                     'gejala_id'=>$request->gejala_id[$i],
//                     'jawaban'=>$request->jawaban[$i],
//                 );
//                 $datapertayaan = Pertanyaan::create($data);
//             }
// //        return view('konsultasi_client.hasil', compact('countSoal'));

//         return view('konsultasi_client.hasil', compact('datapasien', 'datapertayaan'));
//        route('konsultsi_client.hasil')->with('berhasil', 'Data berhasil di tambah');
        $data = array (
            'G001' => $request->G001,
            'G002' => $request->G002,
            'G003' => $request->G003,
            'G004' => $request->G004,
            'G005' => $request->G005,
            'G006' => $request->G006,
            'G007' => $request->G007,
            'G008' => $request->G008,
            'G009' => $request->G009,
            'G010' => $request->G010,
            'G011' => $request->G011,
            'G012' => $request->G012,
            'G013' => $request->G013,
            'G014' => $request->G014,
            'G015' => $request->G015,
            'G016' => $request->G016,
            'G017' => $request->G017,
            'G018' => $request->G018,
            'G019' => $request->G019,
            'G020' => $request->G020,
            'G021' => $request->G021,
            'G022' => $request->G022
        );
        foreach ($data as $key => $value) {
            Pertanyaan::create([
                'gejala_id'=>$key,
                'jawaban'=>$value
            ]);
        }

        $datasoal = KonsultasiClient::all();
        return view('konsultasi_client.hasil', compact('data','datasoal'));
        //return redirect()->route('hasil.index',['data' => $data]);

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
