<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>

        <a href="<?= base_url('admin/Data_mobil/tambah_mobil'); ?>" class="btn btn-primary mb-2">Tambah Data</a>

        <?= $this->session->flashdata('pesan'); ?>

        <table class="table table-hover table-striped tanbe-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No. Plat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($mobil as $mbl) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img src="<?= base_url() . 'assets/img/imgcar/' . $mbl['gambar']; ?>" alt="" width="60px"></td>
                    <td><?= $mbl['kode_type']; ?></td>
                    <td><?= $mbl['merk']; ?></td>
                    <td><?= $mbl['no_plat']; ?></td>
                    <td><?php
                            if ($mbl['status'] == "0") {
                                echo "<span class='badge badge-danger'>Tidak Tesedia</span>";
                            } else {
                                echo "<span class='badge badge-primary'>Tesedia</span>";
                            }
                            ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/data_mobil/detail_mobil/') . $mbl['id_mobil']; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                        <a href="<?= base_url('admin/data_mobil/hapus_mobil/') . $mbl['id_mobil']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="<?= base_url('admin/Data_mobil/ubah_mobil/') . $mbl['id_mobil']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>