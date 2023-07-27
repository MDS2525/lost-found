<?= $this->extend('dashboard/index') ?>

<?= $this->section('content') ?>


<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Temuan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="/temuan/create">Tambah Temuan</a></h6>
        </div>
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
                            <th>No HP</th>
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
                                <td><?= $temuan['no_hp'] ?></td>
                                <td>
                                    <a href="/temuan/edit/<?= $temuan['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/temuan/delete/<?= $temuan['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
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