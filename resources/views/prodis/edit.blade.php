@extends('layouts.app')

@section('title', 'Edit Program Studi')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit Program Studi</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Prodi</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $prodi->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label fw-bold">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $prodi->fakultas }}" required>
            </div>
            <button type="submit" class="btn btn-warning mt-3"><i class="fas fa-sync-alt me-1"></i> Update</button>
            <a href="{{ route('prodis.index') }}" class="btn btn-secondary ms-2 mt-3"><i class="fas fa-arrow-alt-circle-left me-1"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection