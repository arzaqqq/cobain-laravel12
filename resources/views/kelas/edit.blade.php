@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Kelas</h1>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}" required>
        </div>
        <div class="mb-3">
            <label for="nomor_kelas" class="form-label">Nomor Kelas</label>
            <input type="number" class="form-control" id="nomor_kelas" name="nomor_kelas" value="{{ old('nomor_kelas', $kelas->nomor_kelas) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
