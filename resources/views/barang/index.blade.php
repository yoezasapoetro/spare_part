@extends('main')

@section('title')
    Barang
@endsection

@section('content')
    <div class="m-4">
        <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary">
            Tambah Barang
        </a>
    </div>

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Harga Jual</td>
                <td>Harga Beli</td>
                <td>Satuan</td>
                <td>Kategori</td>
                <td>Stok</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr>
                <td>{{ $item->kode_barang }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga_jual }}</td>
                <td>{{ $item->harga_beli }}</td>
                <td>{{ $item->satuan }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $item->kode_barang) }}" class="btn btn-info btn-sm">
                        Edit
                    </a>
                    <form action="{{ route('barang.destroy', $item->kode_barang) }}" method="post">
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