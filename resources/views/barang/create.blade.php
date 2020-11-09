@extends('main')

@section('title')
    Tambah Barang
@endsection

@section('content')
<form action="{{ route('barang.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Kode Barang</label>
        <div class="input-group">
            <input type="text" class="form-control" name="kode_barang" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Nama Barang
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="nama_barang" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Harga Jual
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="harga_jual" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Harga Beli
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="harga_beli" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Satuan
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="satuan" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Kategori
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="kategori" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">Stok</label>
        <div class="input-group">
            <input type="text" class="form-control" name="stok" value="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection