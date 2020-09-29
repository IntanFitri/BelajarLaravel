<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use KaryawanSeeder;
use PDF;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $karyawan = Karyawan::all();
      return view('karyawan.index', compact('karyawan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // return response()->json($karyawan);
        $karyawan = Karyawan::create( [
            'nama'          => $request->nama,
            'jabatan'       => $request->jabatan,
            'alamat'        => $request->alamat,
            'keterangan'    => $request->keterangan
        ] );
        return redirect('karyawan');
        // echo $request->nama;
        // echo $request->jabatan;
        // echo $request->alamat;
        // echo $request->keterangan;
    }
    public function carikaryawan(Request $request)
    {
        //return response()->json($request->txtcari);
        $karyawan = Karyawan::where('nama', 'LIKE', '%'.$request->txtcari.'%')->get();
        return view('karyawan.index', compact('karyawan', $karyawan));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    public function createPDF() {
        // retreive all records from db
        $data = Karyawan::all();

        // share data to view
        $pdf = PDF::loadView('karyawan.pdf_view', compact('data', $data));

        // download PDF file with download method
        return $pdf->download('karyawan-pdf.pdf');
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan=Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $karyawan=Karyawan::find($id);
        $karyawan->nama         = $request->nama;
        $karyawan->jabatan      = $request->jabatan;
        $karyawan->alamat       = $request->alamat;
        $karyawan->keterangan   = $request->keterangan;
        $karyawan->save();

        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Karyawan $karyawan)
    {
        $karyawan->delete();
        $request->session()->flash('message', 'Successfully deleted');
        return redirect('karyawan');
    }
}
