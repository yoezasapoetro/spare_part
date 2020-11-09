<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\PembelianModel;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = PembelianModel::all();

        return view('pembelian.index', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = BarangModel::all();

        return view('pembelian.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = $this->validate($request, [
            'tgl_faktur' => ['required', 'date'],
            'no_faktur' => ['required'],
            'nama_supplier' => ['required'],
            'kode_barang' => ['required'],
            'jumlah' => ['required', 'numeric'],
            'harga_satuan' => ['required', 'numeric'],
        ]);

        PembelianModel::create($pembelian);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  numeric  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = PembelianModel::findOrFail($id);
        
        return view('pembelian.edit', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  numeric  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembelian = PembelianModel::findOrFail($id);
        
        $pembelian_field = $this->validate($request, [
            'tgl_faktur' => ['required', 'date'],
            'no_faktur' => ['required'],
            'nama_supplier' => ['required'],
            'kode_barang' => ['required'],
            'jumlah' => ['required', 'numeric'],
            'harga_satuan' => ['required', 'numeric'],
        ]);

        $pembelian->update($pembelian_field);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  numeric  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PembelianModel::destroy($id);

        return back();
    }

    public function report(Request $request)
    {
        $pembelian = PembelianModel::with('barang')->get();

        return view('pembelian.report', compact('pembelian'));
    }
}
