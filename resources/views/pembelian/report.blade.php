@extends('report')

@section('report_type')
    Pembelian
@endsection

@section('content')
<div class="text-center">
    <h3>Spare Part</h3>
    <h3>Laporan Pembelian</h3>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <td>Tgl Faktur</td>
                <td>No Faktur</td>
                <td>Supplier</td>
                <td>Barang</td>
                <td>Jumlah</td>
                <td>Harga Satuan</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembelian as $item)
            <tr>
                <td>{{ $item->tgl_faktur }}</td>
                <td>{{ $item->no_faktur }}</td>
                <td>{{ $item->nama_supplier }}</td>
                <td>{{ $item->barang->nama_barang }}</td>
                <td>{{ $item->jumlah }} {{ $item->barang->satuan }}</td>
                <td>{{ $item->harga_satuan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection