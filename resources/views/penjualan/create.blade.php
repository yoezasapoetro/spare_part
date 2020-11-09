@extends('main')

@section('title')
    Transaksi Penjualan
@endsection

@section('content')
<form action="{{ route('barang.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">tgl faktur</label>
        <div class="input-group">
            <input type="text" name="tgl_faktur" class="form-control" placeholder="YYYY-MM-DD" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">no faktur</label>
        <div class="input-group">
            <input type="text" name="no_faktur" class="form-control" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">kode konsumen</label>
        <div class="input-group">
            <select class="form-control" name="kode_barang" id="">
                @foreach ($customer as $item)
            <option class="form-control" value="{{ $item->kode_customer }}">{{ $item->nama_customer }}</option>
            @endforeach
            </select>
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
            <input type="text" name="jumlah" class="form-control" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">harga satuan</label>
        <div class="input-group">
            <input type="text" name="harga_satuan" class="form-control" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="">harga total</label>
        <div class="input-group">
            <input type="text" name="harga_total" class="form-control" value="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection