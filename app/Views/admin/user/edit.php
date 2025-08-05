<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h2>Edit User</h2>

<form action="<?= base_url('user/update/' . $user['id']) ?>" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?= esc($user['username']) ?>" required>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= esc($user['nama']) ?>" required>
    </div>
    <div class="form-group">
        <label>Password (kosongkan jika tidak diubah)</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label>Level</label>
        <select name="level" class="form-control">
            <option value="admin" <?= $user['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="user" <?= $user['level'] == 'user' ? 'selected' : '' ?>>User</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?= $this->endSection() ?>
