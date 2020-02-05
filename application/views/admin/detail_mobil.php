<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/imgcar/') . $detail['gambar']; ?>" alt="<?= $detail['gambar']; ?>" width="100%">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type Mobil</td>
                                <td>
                                    <?php
                                    if ($detail['kode_type'] == "SDN") {
                                        echo "Sedan";
                                    } elseif ($detail['kode_type'] == "HTB") {
                                        echo "hatchback";
                                    } elseif ($detail['kode_type'] == "MPV") {
                                        echo "Multi Purpose vechile";
                                    } else {
                                        echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Merk</td>
                                <td><?= $detail['merk']; ?></td>
                            </tr>

                            <tr>
                                <td>No. Plat</td>
                                <td><?= $detail['no_plat']; ?></td>
                            </tr>

                            <tr>
                                <td>Warna</td>
                                <td><?= $detail['warna']; ?></td>
                            </tr>

                            <tr>
                                <td>Tahun</td>
                                <td><?= $detail['tahun']; ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td><?php
                                    if ($detail['status'] == 0) {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                        </table>

                        <a class="btn btn-sm btn-danger" href="<?= base_url('admin/data_mobil'); ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_mobil/ubah_mobil/') . $detail['id_mobil']; ?>">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>