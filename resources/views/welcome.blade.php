@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
    <div class="container-fluid py-5">
        <h1 class="display-4 fw-bold text-primary mb-3">Selamat Datang di Aplikasi Kampus Modern</h1>
        <p class="col-md-9 fs-5 mx-auto text-secondary mb-4">
            Aplikasi ini dirancang untuk mempermudah pengelolaan data Program Studi dan Mahasiswa dengan antarmuka yang bersih dan intuitif, dibangun menggunakan Laravel dan sentuhan desain modern.
        </p>
        <hr class="my-4 border-primary opacity-25">
        <p class="mb-4">Mulai jelajahi data Anda sekarang!</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ route('prodis.index') }}" role="button">
                <i class="fas fa-graduation-cap me-2"></i>Lihat Program Studi
            </a>
            <a class="btn btn-success btn-lg px-4" href="{{ route('mahasiswas.index') }}" role="button">
                <i class="fas fa-user-graduate me-2"></i>Lihat Data Mahasiswa
            </a>
        </div>
    </div>
</div>
@endsection