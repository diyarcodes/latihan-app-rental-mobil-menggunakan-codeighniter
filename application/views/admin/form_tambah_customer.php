<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
    </section>

    <form action="<?= base_url('admin/Data_customer/tambah_customer'); ?>" method="post" autocomplete="off">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
            <?= form_error('nama', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            <?= form_error('username', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
            <?= form_error('alamat', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="">-- Pilih Gender --</option>
                <option value="Laki-laki">-- Laki-laki --</option>
                <option value="perempuan">-- Perempuan --</option>
            </select>
            <?= form_error('gender', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
            <label for="no_telepon">No. telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control">
            <?= form_error('no_telepon', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
            <label for="no_ktp">No KTP</label>
            <input type="text" name="no_ktp" id="no_ktp" class="form-control">
            <?= form_error('no_ktp', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <?= form_error('password', '<span class="text-small text-danger">', '</span>'); ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
</div>