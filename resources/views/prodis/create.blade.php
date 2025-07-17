@extends('layouts.app')

@section('title', 'Tambah Program Studi')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Tambah Program Studi Baru</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('prodis.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Prodi</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label fw-bold">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-save me-1"></i> Simpan</button>
            <a href="{{ route('prodis.index') }}" class="btn btn-secondary ms-2 mt-3"><i class="fas fa-arrow-alt-circle-left me-1"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection