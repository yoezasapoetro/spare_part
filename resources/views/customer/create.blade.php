@extends('main')

@section('title')
    Tambah Customer
@endsection

@section('content')
<form action="{{ route('customer.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Kode Customer</label>
        <div class="input-group">
            <input type="text" class="form-control" name="kode_customer" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Nama Customer
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="nama_customer" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Alamat
        </label>
        <div class="input-group">
            <textarea class="form-control" name="alamat" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="">
            HP
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="hp" value="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection