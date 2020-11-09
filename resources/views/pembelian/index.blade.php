@extends('main')

@section('title')
    Pembelian
@endsection

@section('content')
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
            @foreach ($pembelian as $item)
            <tr>
                <td>{{ $item->kode_pembelian }}</td>
                <td>{{ $item->nama_pembelian }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->hp }}</td>
                <td>
                    <a href="{{ route('pembelian.edit', $item->kode_pembelian) }}" class="btn btn-info btn-sm">
                        Edit
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" id="delete"
                        data-href="{{ route('pembelian.destroy', $item->kode_pembelian) }}">
                        Hapus
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
@endsection