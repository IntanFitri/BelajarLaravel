<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matkul = Matkul::create($request->all());
        return redirect('matkul');
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
        $matkul = Matkul::find($id);
       // return response()->json($matkul);
       return view('matkul.edit', compact('matkul'));

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
        $matkul = Matkul :: find($id);
        $matkul->nama_dosen=$request->nama_dosen;
        $matkul->matakuliah=$request->matakuliah;
        $matkul->keterangan=$request->keterangan;
        $matkul->nomor=$request->nomor;

        $matkul->save();
        return redirect('matkul');
    }
    public function cari(Request $request)
    {
        $matkul = Matkul::where('nama_dosen', $request->nama_dosen)->first();
        // return response()->json($matkul);
        return view('matkul.cari', compact('matkul'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();

        return redirect('matkul');
    }
}
