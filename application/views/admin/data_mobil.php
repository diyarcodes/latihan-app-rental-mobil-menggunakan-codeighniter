<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>

        <a href="" class="btn btn-primary mb-2">Tambah Data</a>

        <table class="table table-hover table-striped tanbe-bordered">
            <thead>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>No. Plat</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($mobil as $mbl) : ?>
                    <td><?= $no++; ?></td>
                    <td></td>
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
                        <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>