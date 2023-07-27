<?= $this->extend('dashboard/index') ?>

<?= $this->section('content') ?>

<head>
    <title>Edit Temuan</title>
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
        .form-container input[type="file"],
        .form-container input[type="number"] {
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
        <h1>Edit Temuan</h1>

        <form action="/temuan/update/<?= $temuan['id'] ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= $temuan['nama_barang'] ?>" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $temuan['kategori'] ?>" required>
            </div>

            <div class="form-group">
                <label for="tanggal_penemuan">Tanggal Penemuan</label>
                <input type="date" name="tanggal_penemuan" id="tanggal_penemuan" class="form-control" value="<?= $temuan['tanggal_penemuan'] ?>" required>
            </div>

            <div class="form-group">
                <label for="tempat_penemuan">Tempat Penemuan</label>
                <input type="text" name="tempat_penemuan" id="tempat_penemuan" class="form-control" value="<?= $temuan['tempat_penemuan'] ?>" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control-file">
                <small>Biarkan kosong jika tidak ingin mengubah foto</small>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $temuan['no_hp'] ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

<?= $this->endSection() ?>