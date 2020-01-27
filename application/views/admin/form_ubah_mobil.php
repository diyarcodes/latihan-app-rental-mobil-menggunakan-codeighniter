<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Ubah Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_mobil" value="<?= $mobil['id_mobil']; ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Type Mobil</label>
                                <select name="kode_type" id="" class="form-control">
                                    <option value="<?= $mobil['kode_type']; ?>"><?= $mobil['kode_type']; ?></option>
                                    <?php foreach ($type as $typ) : ?>
                                        <option value="<?= $typ['kode_type']; ?>"><?= $typ['nama_type']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" class="form-control" value="<?= $mobil['merk']; ?>">
                                <?= form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">No. Plat</label>
                                <input type="text" name="no_plat" class="form-control" value="<?= $mobil['no_plat']; ?>">
                                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" class="form-control" value="<?= $mobil['warna']; ?>">
                                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="tahun" class="form-control" value="<?= $mobil['tahun']; ?>">
                                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option <?php if ($mobil['status'] == 1) {
                                                echo "selected='selected'";
                                            }
                                            echo $mobil['status']; ?> value="1">Tersedia</option>
                                    <option <?php if ($mobil['status'] == 0) {
                                                echo "selected='selected'";
                                            }
                                            echo $mobil['status']; ?> value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
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