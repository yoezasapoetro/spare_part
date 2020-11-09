<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = BarangModel::all();

        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = $this->validate($request, [
            'kode_barang' => ['required', 'unique:barang_master,kode_barang'],
            'nama_barang' => ['required'],
            'harga_jual' => ['required', 'numeric'],
            'harga_beli' => ['required', 'numeric'],
            'satuan' => ['required'],
            'kategori' => ['required'],
            'stok' => ['required', 'numeric']
        ]);

        BarangModel::create($barang);

        return redirect()->route('barang.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  numeric  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = BarangModel::findOrFail($id);
        
        return view('barang.edit', compact('barang'));
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
        $barang = BarangModel::findOrFail($id);
        
        $barang_field = $this->validate($request, [
            'nama_barang' => ['required'],
            'harga_jual' => ['required', 'numeric'],
            'harga_beli' => ['required', 'numeric'],
            'satuan' => ['required'],
            'kategori' => ['required'],
            'stok' => ['required', 'numeric']
        ]);

        $barang->update($barang_field);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  numeric  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangModel::destroy($id);

        return back();
    }
}
