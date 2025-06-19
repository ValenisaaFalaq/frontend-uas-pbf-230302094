@extends('layout')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Data Pasien</h1>
    <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>L/P</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $p)
            <tr>
                <td>{{ $p['id'] }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>{{ $p['alamat'] }}</td>
                <td>{{ $p['tanggal_lahir'] }}</td>
                <td>{{ $p['jenis_kelamin'] }}</td>
                <td>
                    <a href="{{ route('pasien.edit', $p['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pasien.destroy', $p['id']) }}" method="POST" class="d-inline">
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