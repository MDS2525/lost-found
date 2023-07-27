<?= $this->extend('dashboard/index') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Kehilangan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="/kehilangan/create">Tambah Kehilangan</a></h6>
        </div>
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
                            <th>No HP</th>
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
                                <td><?= $item['no_hp'] ?></td>
                                <td>
                                    <a href="/kehilangan/edit/<?= $item['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/kehilangan/delete/<?= $item['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>