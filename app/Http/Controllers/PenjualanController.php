<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = PenjualanModel::all();

        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = CustomerModel::all();
        $barang = BarangModel::all();

        return view('penjualan.create', compact('barang', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan = $this->validate($request, [
            'tgl_faktur' => ['required', 'date'],
            'no_faktur' => ['required'],
            'kode_customer' => ['required'],
            'kode_barang' => ['required'],
            'jumlah' => ['required', 'int'],
            'harga_satuan' => ['required', 'double'],
            'harga_total' => ['required', 'double']	
        ]);

        PenjualanModel::create($penjualan);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = PenjualanModel::findOrFail($id);
        
        return view('penjualan.edit', compact('penjualan'));
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
        $penjualan = PenjualanModel::findOrFail($id);
        
        $penjualan_field = $this->validate($request, [
            
        ]);

        $penjualan->update($penjualan_field);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PenjualanModel::destroy($id);

        return back();
    }

    public function report(Request $request)
    {
        $penjualan = PenjualanModel::with('barang', 'customer')->get();

        return view('penjualan.report', compact('penjualan'));
    }
}
