@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit Mahasiswa</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label fw-bold">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label fw-bold">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $mahasiswa->kelas }}" required>
            </div>
            <div class="mb-3">
                <label for="prodi_id" class="form-label fw-bold">Prodi</label>
                <select class="form-control" id="prodi_id" name="prodi_id" required>
                    <option value="">-- Pilih Prodi --</option>
                    @foreach($prodis as $prodi)
                        <option value="{{ $prodi->id }}" {{ $mahasiswa->prodi_id == $prodi->id ? 'selected' : '' }}>
                            {{ $prodi->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label fw-bold">Angkatan</label>
                <input type="text" class="form-control" id="angkatan" name="angkatan" value="{{ $mahasiswa->angkatan }}" required>
            </div>
            <button type="submit" class="btn btn-warning mt-3"><i class="fas fa-sync-alt me-1"></i> Update</button>
            <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary ms-2 mt-3"><i class="fas fa-arrow-alt-circle-left me-1"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection