<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data Tyoe</h1>
        </div>

        <form action="<?= base_url('admin/data_type/tambah_type'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <label for="kode_type">kode Type</label>
                <input type="text" name="kode_type" id="kode_type" class="form-control">
                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
                <label for="nama_type">Nama Type</label>
                <input type="text" name="nama_type" id="nama_type" class="form-control">
                <?= form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </section>
</div>