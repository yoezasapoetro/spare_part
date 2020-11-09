@extends('main')

@section('title')
    Edit Customer
@endsection

@section('content')
<form action="{{ route('customer.update', $customer->kode_barang) }}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="">Kode Customer</label>
        <div class="input-group">
            <input type="text" class="form-control" name="kode_customer" disabled value="{{ $customer->kode_customer }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Nama Customer
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="nama_customer" value="{{ $customer->nama_customer }}">
        </div>
    </div>
    <div class="form-group">
        <label for="">
            Alamat
        </label>
        <div class="input-group">
        <textarea class="form-control" name="alamat" rows="3">{{ $customer->alamat }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="">
            HP
        </label>
        <div class="input-group">
            <input type="text" class="form-control" name="hp" value="{{ $customer->hp }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection