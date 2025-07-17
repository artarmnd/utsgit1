@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0"><i class="fas fa-user-plus me-2"></i> Tambah Mahasiswa Baru</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label fw-bold">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label fw-bold">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="prodi_id" class="form-label fw-bold">Prodi</label>
                <select class="form-control" id="prodi_id" name="prodi_id" required>
                    <option value="">-- Pilih Prodi --</option>
                    @foreach($prodis as $prodi)
                        <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label fw-bold">Angkatan</label>
                <input type="text" class="form-control" id="angkatan" name="angkatan" required>
            </div>
            <button type="submit" class="btn btn-success mt-3"><i class="fas fa-save me-1"></i> Simpan</button>
            <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary ms-2 mt-3"><i class="fas fa-arrow-alt-circle-left me-1"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection