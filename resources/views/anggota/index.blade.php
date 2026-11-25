<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS Pemrograman Web</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #fff;
            color: #292929;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #f8f9fa;
            min-height: 56px;
        }

        .navbar-brand {
            font-size: 20px;
        }

        .main-container {
            max-width: 1200px;
        }

        .alert {
            margin-top: 24px;
            margin-bottom: 16px;
        }

        .member-card {
            min-height: 645px;
            border: 1px solid #eee;
            border-radius: 13px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .06);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .photo {
            width: 100%;
            height: 390px;
            object-fit: cover;
            object-position: center;
        }

        .member-card .card-body {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 16px;
        }

        .member-name {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
            text-transform: lowercase;
        }

        .member-description {
            color: #777;
            font-size: 14px;
            line-height: 1.5;
        }

        .card-actions {
            margin-top: auto;
            padding-top: 12px;
            border-top: 1px solid #eee;
            display: flex;
            gap: 8px;
        }

        .btn-outline-primary {
            color: #5794df;
            border-color: #5794df;
        }

        .btn-outline-danger {
            color: #d76d78;
            border-color: #d76d78;
        }

        .add-card {
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 24px;
        }

        .plus-circle {
            width: 108px;
            height: 108px;
            border-radius: 50%;
            background: #78bd69;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 58px;
            font-weight: 300;
            margin: auto;
        }

        .add-card .card-body {
            flex: 0 0 auto;
            width: 100%;
        }

        .add-button {
            background: #78bd69;
            color: white;
            border: none;
            border-radius: 6px;
        }

        .add-button:hover {
            background: #64a955;
            color: white;
        }

        .site-footer {
            margin-top: 58px;
            color: #777;
            font-size: 14px;
        }

        .site-footer a {
            color: #777;
            text-decoration: none;
            margin: 0 7px;
        }

        .footer-bottom {
            border-top: 1px solid #ddd;
            margin-top: 25px;
            padding: 18px 0;
        }

        @media (max-width: 767px) {
            .member-card {
                min-height: 0;
            }

            .photo {
                height: 320px;
            }

            .add-card {
                min-height: 300px;
            }

            .site-footer {
                margin-top: 35px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" href="/">UTS Pem Web</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#anggota">Features</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">(Masukkan Nama)</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-secondary">(Masukkan NIM)</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container main-container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Biodata berhasil diperbarui.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>

        <div class="row g-4" id="anggota">
            <!-- KARTU TAMBAH -->
            <div class="col-12 col-md-4">
                <div class="card member-card">
                    <div class="add-card h-100 d-flex flex-column justify-content-center">
                        <div class="plus-circle">+</div>
                        <div class="mt-4 w-100">

                            <a href="{{ route('anggota.create') }}" class="btn add-button w-100 py-2">
                                Tambah
                            </a>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BIODATA ANGGOTA PERTAMA -->
            <div class="col-12 col-md-4">
                <div class="card member-card">
                    <img src="{{ asset('images/aldi.jpg') }}" class="photo" alt="Foto Muhammad Aldi">

                    <div class="card-body">
                        <h5 class="member-name">Muhammad Aldi</h5>
                        <p class="member-description mb-0">
                            Nim 24010110221 merupakan master dari uts ini dengan tugas
                            membuat front-end dan mengirimkannya ke grup
                        </p>

                        <div class="card-actions">
                            <button class="btn btn-outline-primary btn-sm" type="button" disabled>Edit</button>
                            <button class="btn btn-outline-danger btn-sm" type="button" disabled>Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BIODATA ANGGOTA KEDUA -->
            <div class="col-12 col-md-4">
                <div class="card member-card">
                    <img src="{{ asset('image/daniakbar.jpg') }}" class="photo" alt="Foto Muhammad Aldi">
                    <div class="card-body">
                        <h5 class="member-name">Muhammad Ramdhani Akbar</h5>
                        <p class="member-description mb-0">
                            dengan NIM 24010110208 merupakan pegawai dan mempunyai
                            tugas mengerjakan back-end pada UTS ini
                        </p>

                        <div class="card-actions">
                            <button class="btn btn-outline-primary btn-sm" type="button" disabled>Edit</button>
                            <button class="btn btn-outline-danger btn-sm" type="button" disabled>Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer text-center">
            <div>
                <a href="/">Home</a>
                <a href="#anggota">Features</a>
                <a href="#anggota">Pricing</a>
                <a href="#anggota">FAQs</a>
                <a href="#anggota">About</a>
            </div>

            <div class="footer-bottom">
                © 2025 Dibuat Sejujurnya Oleh Team (Masukkan Nama ketua)
                dan (Masukkan Nama Anggota) Tanpa Mencontek dari Tim Lain
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>