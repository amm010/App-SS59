<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Merk;
use App\Models\Kategori;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $brg = Barang::all();
        return view('DataBarang.index', compact('nomor','brg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Merk = Merk::all();
        $Kategori = Kategori::all();
        return view('DataBarang.form', compact('Merk','Kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brg = new Barang;

        $brg->kode = $request->kode;
        $brg->nm_barang = $request->nama_brg;
        $brg->harga = $request->harga;
        $brg->merks_id = $request->merk;
        $brg->kategoris_id = $request->kategori;
        $brg->foto = "default.jpg";
        $brg->save();

        return redirect('/DataBarang');
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
        $brg = Barang::find($id);
        $Merk = Merk::all();
        $Kategori = Kategori::all();
        return view('DataBarang.edit', compact('brg', 'Merk', 'Kategori'));
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
        $brg = Barang::find($id);

        $brg->kode = $request->kode;
        $brg->nm_barang = $request->nama_brg;
        $brg->harga = $request->harga;
        $brg->merks_id = $request->merk;
        $brg->kategoris_id = $request->kategori;
        $brg->foto = "default.jpg";
        $brg->save();

        return redirect('/DataBarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = Barang::find($id);
        $brg->delete();

        return redirect('/DataBarang');
    }
}
