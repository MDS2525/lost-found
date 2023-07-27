<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-... tambahkan hash integritas yang valid ..." crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>LOFO | Beranda</title>


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">LoFo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h3 class="text-center mt-4">Pencarian Barang Hilang</h3>
        <!-- Search Form -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari barang sesuai kategori..." aria-label="Search">
                    <button class="btn text-light" type="submit">Cari</button>
                </form>
            </div>
        </div>

        <!-- Button barang temuan & hilang -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <button class="btn btn-primary me-2" id="btnBarangTemuan">Barang Temuan</button>
                <button class="btn btn-primary" id="btnBarangHilang">Barang Hilang</button>
            </div>
        </div>




        <!-- Cards -->
        <div class="row justify-content-center mt-4">
            <div class="row justify-content-center mt-4">
                <div class="col-md-3 text-center">
                    <div class="card">
                        <i class=" mt-2 fas fa-bars fa-4x " style="color: #4A55A2;"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lain lain</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <i class=" mt-2 fas fa-mobile-alt fa-4x " style="color: #4A55A2;"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Elektronik</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <i class=" mt-2 fas fa-wallet fa-4x " style="color: #4A55A2;"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Dompet</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <i class=" mt-2 fas fa-key fa-4x " style="color: #4A55A2;"></i>
                        <div class="card-body text-center">
                            <h5 class="card-title">Kunci</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card end -->
    </div>

    <!-- Daftar Temuan -->
    <div class="container mt-4" id="temuan">
        <h1 class="h3 mb-2 text-gray-800">Daftar Temuan</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Tanggal Penemuan</th>
                                <th>Tempat Penemuan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($temuans as $temuan) : ?>
                                <tr>
                                    <td><?= $temuan['nama_barang'] ?></td>
                                    <td><?= $temuan['kategori'] ?></td>
                                    <td><?= $temuan['tanggal_penemuan'] ?></td>
                                    <td><?= $temuan['tempat_penemuan'] ?></td>
                                    <td>
                                        <?php if (!empty($temuan['foto'])) : ?>
                                            <img src="<?= base_url('uploads/' . $temuan['foto']) ?>" alt="Foto Temuan" width="100">
                                        <?php else : ?>
                                            <span>Tidak ada foto</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="login" class="btn btn-primary btn-sm">Claim</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Kehilangan -->
    <div class="container mt-4" id="hilang">
        <h1 class="h3 mb-2 text-gray-800">Daftar Kehilangan</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Tanggal Kehilangan</th>
                                <th>Tempat Kehilangan</th>
                                <th>Informasi Detail</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kehilangan as $item) : ?>
                                <tr>
                                    <td><?= $item['nama_barang'] ?></td>
                                    <td><?= $item['kategori'] ?></td>
                                    <td><?= $item['tanggal_kehilangan'] ?></td>
                                    <td><?= $item['tempat_kehilangan'] ?></td>
                                    <td><?= $item['informasi_detail'] ?></td>
                                    <td>
                                        <?php if (!empty($item['foto'])) : ?>
                                            <img src="<?= base_url('uploads/' . $item['foto']) ?>" alt="Foto Kehilangan" width="100">
                                        <?php else : ?>
                                            <span>Tidak ada foto</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="login" class="btn btn-primary btn-sm">Laporkan</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 Tim Gas Terus. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script>
        var btnBarangTemuan = document.getElementById("btnBarangTemuan");
        var temuanContainer = document.getElementById("temuan");

        btnBarangTemuan.addEventListener("click", function() {
            temuanContainer.scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
    <script>
        var btnBarangHilang = document.getElementById("btnBarangHilang");
        var hilangContainer = document.getElementById("hilang");

        btnBarangHilang.addEventListener("click", function() {
            hilangContainer.scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>

</body>

</html>