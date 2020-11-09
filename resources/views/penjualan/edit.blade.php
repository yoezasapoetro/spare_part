@extends('main')

@section('title')
    Edit Barang
@endsection

@section('content')
<form action="{{ route('barang.update', $barang->kode_barang) }}" method="post">
    @method('put')
    @csrf
    

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection