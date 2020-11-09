@extends('main')

@section('title')
    Edit Barang
@endsection

@section('content')
<form action="{{ route('barang.update', $barang->kode_barang) }}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="">Kode Barang</label>
        <div class="input-group">
            <input type="text" class="form-control" name="kode_barang" disabled value="{{ $barang->kode_barang }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Nama Barang
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Harga Jual
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="harga_jual" value="{{ $barang->harga_jual }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Harga Beli
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="harga_beli" value="{{ $barang->harga_beli }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Satuan
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="satuan" value="{{ $barang->satuan }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Kategori
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="kategori" value="{{ $barang->kategori }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">Stok</label>
        <div class="input-group">
            <input type="text" class="form-control" name="stok" value="{{ $barang->stok }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection