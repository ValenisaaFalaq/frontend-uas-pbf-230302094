@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Edit Pasien</h1>
    <form action="{{ route('pasien.update', $pasien['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pasien['nama'] }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pasien['alamat'] }}" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pasien['tanggal_lahir'] }}" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="L" {{ $pasien['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $pasien['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
