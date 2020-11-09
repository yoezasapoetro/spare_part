@extends('main')

@section('title')
    Customer
@endsection

@section('content')
    <div class="m-4">
        <a href="{{ route('customer.create') }}" class="btn btn-sm btn-primary">
            Tambah Customer
        </a>
    </div>

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Alamat</td>
                <td>HP</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $item)
            <tr>
                <td>{{ $item->kode_customer }}</td>
                <td>{{ $item->nama_customer }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->hp }}</td>
                <td>
                    <a href="{{ route('customer.edit', $item->kode_customer) }}" class="btn btn-info btn-sm">
                        Edit
                    </a>
                    <form action="{{ route('customer.destroy', $item->kode_customer) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="confirm('Yakin hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
@endsection