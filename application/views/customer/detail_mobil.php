<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= base_url('assets/img/imgcar/') . $mobil['gambar']; ?>" alt="<?= $mobil['gambar']; ?>" class="card-img">
                </div>

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Merk</th>
                            <td><?= $mobil['merk']; ?></td>
                        </tr>

                        <tr>
                            <th>No. Plat</th>
                            <td><?= $mobil['no_plat']; ?></td>
                        </tr>

                        <tr>
                            <th>Warna</th>
                            <td><?= $mobil['warna']; ?></td>
                        </tr>

                        <tr>
                            <th>Tahun</th>
                            <td><?= $mobil['tahun']; ?></td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>
                                <?php if ($mobil['status'] == 1) {
                                    echo "Tersedia";
                                } else {
                                    echo "Tidak Tersedia / Sedang dirental";
                                } ?>
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <?php
                                if ($mobil['status'] == 0) {
                                    echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                                } else {
                                    echo anchor('customer/Rental/tambahRental' . $mobil['id_mobil'], '<button class="btn btn-success">Rental</button>');
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>