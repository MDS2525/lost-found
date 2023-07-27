<?= $this->extend('dashboard/index') ?>

<?= $this->section('content') ?>

<!-- Tabel Temuan -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Temuan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableTemuan" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Tanggal Penemuan</th>
                        <th>Tempat Penemuan</th>
                        <th>Foto</th>
                        <th>No Hp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($temuan as $item) : ?>
                        <tr>
                            <td><?= $item['nama_barang'] ?></td>
                            <td><?= $item['kategori'] ?></td>
                            <td><?= $item['tanggal_penemuan'] ?></td>
                            <td><?= $item['tempat_penemuan'] ?></td>
                            <td>
                                <?php if (!empty($item['foto'])) : ?>
                                    <img src="<?= base_url('uploads/' . $item['foto']) ?>" alt="Foto Temuan" width="100">
                                <?php else : ?>
                                    <span>Tidak ada foto</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $item['no_hp'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tabel Kehilangan -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Kehilangan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableKehilangan" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Tanggal Kehilangan</th>
                        <th>Tempat Kehilangan</th>
                        <th>Informasi Detail</th>
                        <th>Foto</th>
                        <th>No Hp</th>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>