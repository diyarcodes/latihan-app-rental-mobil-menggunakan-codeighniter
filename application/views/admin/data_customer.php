<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>

        <a href="<?= base_url('admin/Data_customer/tambah_customer'); ?>" class="btn btn-primary mb-2">Tambah Customer</a>

        <?= $this->session->flashdata('pesan'); ?>

        <table class="table table-hover table-striped tanbe-bordered table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>No. Telepon</th>
                    <th>No. Ktp</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($customer as $mbl) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mbl['nama']; ?></td>
                        <td><?= $mbl['username']; ?></td>
                        <td><?= $mbl['alamat']; ?></td>
                        <td><?= $mbl['gender']; ?></td>
                        <td><?= $mbl['no_telepon']; ?></td>
                        <td><?= $mbl['no_ktp']; ?></td>
                        <td><?= $mbl['password']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/data_customer/detail_customer/') . $mbl['id_customer']; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('admin/data_customer/hapus_customer/') . $mbl['id_customer']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?= base_url('admin/Data_customer/ubah_customer/') . $mbl['id_customer']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>