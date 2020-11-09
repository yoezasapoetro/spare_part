@extends('main')

@section('title')
    Transaksi Pembelian
@endsection

@section('content')
<form action="{{ route('pembelian.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">tgl faktur</label>
        <div class="input-group">
            <input type="text" class="form-control" name="tgl_faktur" placeholder="YYYY-MM-DD" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">no faktur</label>
        <div class="input-group">
            <input type="text" class="form-control" name="no_faktur" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">nama supplier</label>
        <div class="input-group">
            <input type="text" class="form-control" name="nama_supplier" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">kode barang</label>
        <div class="input-group">
            <select class="form-control" name="kode_barang" id="">
                @foreach ($barang as $item)
            <option value="{{ $item->kode_barang }}">{{ $item->nama_barang }}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="">jumlah</label>
        <div class="input-group">
            <input type="text" class="form-control" name="jumlah" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">harga satuan</label>
        <div class="input-group">
            <input type="text" class="form-control" name="harga_satuan" value="">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection