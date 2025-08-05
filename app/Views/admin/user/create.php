<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h2>Tambah User</h2>

<form action="<?= base_url('user/store') ?>" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Level</label>
        <select name="level" class="form-control">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?= $this->endSection() ?>
