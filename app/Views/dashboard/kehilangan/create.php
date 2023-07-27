<?= $this->extend('dashboard/index') ?>

<?= $this->section('content') ?>

<head>
    <title>Tambah Kehilangan</title>
    <style>
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
        }

        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .form-container button[type="submit"] {
            background-color: #4e73df;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Tambah Kehilangan</h1>

        <form action="/kehilangan/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_kehilangan">Tanggal Kehilangan</label>
                <input type="date" name="tanggal_kehilangan" id="tanggal_kehilangan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tempat_kehilangan">Tempat Kehilangan</label>
                <input type="text" name="tempat_kehilangan" id="tempat_kehilangan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="informasi_detail">Informasi Detail</label>
                <textarea name="informasi_detail" id="informasi_detail" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

<?= $this->endSection() ?>