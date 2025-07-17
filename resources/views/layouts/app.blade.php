<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kampus Modern - @yield('title', 'Beranda')</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎓</text></svg>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #007bff; /* Biru Primer */
            --secondary-color: #6c757d; /* Abu-abu Sekunder */
            --success-color: #28a745; /* Hijau Sukses */
            --warning-color: #ffc107; /* Kuning Peringatan */
            --danger-color: #dc3545; /* Merah Bahaya */
            --info-color: #17a2b8; /* Biru Info */
            --light-bg: #f8f9fa; /* Background terang */
            --dark-text: #343a40; /* Teks gelap */
            --shadow-light: 0 0.5rem 1rem rgba(0, 0, 0, 0.05); /* Bayangan lembut */
            --shadow-medium: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1); /* Bayangan sedang */
        }

        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }

        .navbar {
            background-color: var(--primary-color) !important; /* Gunakan warna primer */
            box-shadow: var(--shadow-medium); /* Bayangan lebih jelas */
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: -0.5px;
            color: #fff !important; /* Pastikan brand tetap putih */
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.75) !important; /* Warna link lebih lembut */
            transition: color 0.3s ease;
            margin-right: 15px; /* Jarak antar link */
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #fff !important; /* Warna link aktif/hover putih */
        }
        .navbar-nav .nav-link.active {
             font-weight: 600;
        }

        .container {
            padding-top: 30px; /* Sedikit lebih banyak padding atas */
            padding-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 10px; /* Sudut lebih membulat */
            box-shadow: var(--shadow-light); /* Bayangan lembut */
            margin-bottom: 25px; /* Jarak antar card */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi hover */
        }
        .card:hover {
            transform: translateY(-3px); /* Efek angkat saat hover */
            box-shadow: var(--shadow-medium); /* Bayangan lebih kuat saat hover */
        }

        .card-header {
            border-top-left-radius: 10px; /* Mempertahankan sudut membulat */
            border-top-right-radius: 10px;
            font-weight: 600;
            color: #fff;
            padding: 1rem 1.5rem; /* Padding header */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-header.bg-primary { background-color: var(--primary-color) !important; }
        .card-header.bg-success { background-color: var(--success-color) !important; }
        .card-header.bg-warning { background-color: var(--warning-color) !important; }
        .card-header.bg-info { background-color: var(--info-color) !important; }

        .btn {
            border-radius: 5px; /* Sudut membulat pada tombol */
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08); /* Bayangan pada tombol */
        }
        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.12);
        }
        .btn-primary { background-color: var(--primary-color); border-color: var(--primary-color); }
        .btn-success { background-color: var(--success-color); border-color: var(--success-color); }
        .btn-warning { background-color: var(--warning-color); border-color: var(--warning-color); }
        .btn-danger { background-color: var(--danger-color); border-color: var(--danger-color); }
        .btn-secondary { background-color: var(--secondary-color); border-color: var(--secondary-color); }

        .form-control, .form-select {
            border-radius: 5px; /* Sudut membulat pada input */
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .alert {
            border-radius: 8px; /* Sudut membulat pada alert */
            font-weight: 500;
            box-shadow: var(--shadow-light);
            margin-bottom: 20px;
        }

        .table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden; /* Penting untuk sudut tabel */
            box-shadow: var(--shadow-light);
        }
        .table thead th {
            background-color: var(--primary-color);
            color: #fff;
            border-bottom: none;
            padding: 1rem 1.5rem;
            font-weight: 600;
            vertical-align: middle;
        }
        .table tbody tr {
            transition: background-color 0.2s ease;
        }
        .table tbody tr:hover {
            background-color: #f2f2f2; /* Warna hover pada baris tabel */
        }
        .table tbody td {
            padding: 0.8rem 1.5rem;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
        .table form {
            margin-bottom: 0;
        }
        .action-buttons {
            display: flex;
            gap: 5px; /* Jarak antar tombol aksi */
            justify-content: center;
        }
        .action-buttons .btn {
            padding: 0.375rem 0.6rem; /* Padding tombol aksi kecil */
            font-size: 0.875rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-nav .nav-link {
                margin-right: 0;
                text-align: center;
            }
            .navbar-collapse {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Aplikasi Kampus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
                            <i class="fas fa-home me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('prodis*') ? 'active' : '' }}" href="{{ route('prodis.index') }}">
                            <i class="fas fa-graduation-cap me-1"></i> Program Studi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('mahasiswas*') ? 'active' : '' }}" href="{{ route('mahasiswas.index') }}">
                            <i class="fas fa-user-graduate me-1"></i> Mahasiswa
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/your-username/your-repo" target="_blank">
                            <i class="fab fa-github me-1"></i> GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>