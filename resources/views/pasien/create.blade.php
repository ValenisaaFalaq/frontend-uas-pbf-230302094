@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Tambah Pasien</h1>
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>
</div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
