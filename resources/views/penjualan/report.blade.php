@extends('report')

@section('report_type')
    Penjualan
@endsection

@section('content')
<div class="text-center">
    <h3>Spare Part</h3>
    <h3>Laporan Penjualan</h3>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <td>Tgl Faktur</td>
                <td>No Faktur</td>
                <td>Konsumen</td>
                <td>Barang</td>
                <td>Jumlah</td>
                <td>Harga Satuan</td>
                <td>Harga Total</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $item)
            <tr>
                <td>{{ $item->tgl_faktur }}</td>
                <td>{{ $item->no_faktur }}</td>
                <td>{{ $item->customer->nama_customer }}</td>
                <td>{{ $item->barang->nama_barang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->harga_satuan }}</td>
                <td>{{ $item->harga_total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection