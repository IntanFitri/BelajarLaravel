<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelajar;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelajar = Pelajar::all();
        return view('pelajar.index', compact('pelajar', $pelajar));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelajar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telephone' => 'required',
        ]);
        $pelajar = Pelajar::create( $request->all() );
        return redirect('pelajar');
    }

    public function cari(Request $request)
    {
      $pelajar = Pelajar::where('nama' , $request->nama)->first();
    //   return response()->json($pelajar);
      return view('pelajar.cari', compact('pelajar'));
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
        $pelajar = Pelajar::find($id);
        //return response()->json($pelajar);
        return view('pelajar.edit', compact('pelajar'));
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
        $pelajar = Pelajar :: find($id);
        $pelajar->nama = $request->nama;
        $pelajar->alamat = $request->alamat;
        $pelajar->telephone = $request->telephone;

        $pelajar->save();
        return redirect('pelajar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelajar = Pelajar::find($id);
        $pelajar->delete();

        return redirect('pelajar');
    }
}
