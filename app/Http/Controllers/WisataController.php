<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;

use PDF;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata', $wisata));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request->all());
        $wisata = Wisata::create( $request->all() );
        return redirect('wisata');
    }

    public function cariwisata(Request $request)
    {
        $wisata=Wisata::where('destinasi', 'LIKE', '%'.$request->txtcari.'%')->get();
        // return response()->json($request->txtcari);
        return view('wisata.index', compact('wisata', $wisata));
    }

    public function createPDF() {
        // retreive all records from db
        $data = Wisata::all();

        // share data to view
        $pdf = PDF::loadView('wisata.pdf_view', compact('data', $data));

        // download PDF file with download method
        return $pdf->download('laporan-pdf.pdf');
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::find($id);
      //  return response()->json($wisata);
       return view('wisata.edit', compact('wisata', $wisata));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        $wisata->destinasi      = $request->destinasi;
        $wisata->foto           = $request->foto;
        $wisata->longtitude     = $request->longtitude;
        $wisata->latitude       = $request->latitude;
        $wisata->save();

        return redirect('wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
        return redirect('wisata');
    }
}
