<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Ubah Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="id_mobil" value="<?= $mobil['id_mobil']; ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_type">Type Mobil</label>
                                <select name="kode_type" id="kode_type" class="form-control">
                                    <?php foreach ($typeMobil as $typ) : ?>
                                    <?php if ($typ == $mobil['kode_type']) : ?>
                                    <option value="<?= $typ; ?>" selected><?= $typ; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $typ; ?>"><?= $typ; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" id="merk" class="form-control" value="<?= $mobil['merk']; ?>">
                                <?= form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="no_plat">No. Plat</label>
                                <input type="text" name="no_plat" id="no_plat" class="form-control" value="<?= $mobil['no_plat']; ?>">
                                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" name="warna" id="warna" class="form-control" value="<?= $mobil['warna']; ?>">
                                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" id="tahun" class="form-control" value="<?= $mobil['tahun']; ?>">
                                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option <?php if ($mobil['status'] == 1) {
                                                echo "selected='selected'";
                                            }
                                            echo $mobil['status']; ?> value="1">Tersedia</option>
                                    <option <?php if ($mobil['status'] == 0) {
                                                echo "selected='selected'";
                                            }
                                            echo $mobil['status']; ?> value="0">Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/img/imgcar/') . $mobil['gambar']; ?>" width="90px" height="100px">
                                <input type="hidden" name="gambarLama" value="<?= $mobil['gambar']; ?>">
                                <label for="">gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>