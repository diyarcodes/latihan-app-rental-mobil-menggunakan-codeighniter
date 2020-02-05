<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('admin/data_mobil/tambah_mobil'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_type">Type Mobil</label>
                                <select name="kode_type" id="kode_type" class="form-control">
                                    <option value="">--Pilih Type Mobil--</option>
                                    <?php foreach ($type as $typ) : ?>
                                    <option value="<?= $typ['kode_type']; ?>"><?= $typ['nama_type']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" id="merk" class="form-control">
                                <?= form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="no_plat">No. Plat</label>
                                <input type="text" name="no_plat" id="no_plat" class="form-control">
                                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" name="warna" id="warna" class="form-control">
                                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" name="tahun" id="tahun" class="form-control">
                                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="gambar">gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
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