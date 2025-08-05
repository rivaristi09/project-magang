<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Manajemen User</h1>

<a href="<?= base_url('user/create') ?>" class="btn btn-primary mb-3">Tambah User</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['nama']) ?></td>
                <td><?= esc($user['level']) ?></td>
                <td>
                    <a href="<?= base_url('user/edit/' . $user['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('user/delete/' . $user['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
