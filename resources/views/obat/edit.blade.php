@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Edit Obat</h1>
    <form action="{{ route('obat.update', $obat['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $obat['nama_obat'] }}" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $obat['kategori'] }}" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $obat['stok'] }}" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $obat['harga'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection