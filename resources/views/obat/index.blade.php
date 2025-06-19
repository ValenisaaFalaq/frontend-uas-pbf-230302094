@extends('layout')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Data Obat</h1>
    <a href="{{ route('obat.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obat as $o)
            <tr>
                <td>{{ $o['nama_obat'] }}</td>
                <td>{{ $o['kategori'] }}</td>
                <td>{{ $o['stok'] }}</td>
                <td>{{ $o['harga'] }}</td>
                <td>
                    <a href="{{ route('obat.edit', $o['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('obat.destroy', $o['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection