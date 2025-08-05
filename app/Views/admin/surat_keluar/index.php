<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h2>Daftar Surat Keluar</h2>
<?= session()->getFlashdata('success') ? "
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
        ".session()->getFlashdata('success')."
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>" : '' ?>
<a href="<?= site_url('surat_keluar/create') ?>" class="btn btn-primary mb-3">Tambah Surat</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>No Surat</th>
            <th>Tahun</th>
            <th>Tanggal Surat</th>
            <th>Tanggal Keluar</th>
            <th>Kepada</th>
            <th>Perihal</th>
            <th>Pembuat</th>
            <th>Divisi</th>
            <th>Courier</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($surat as $key => $row) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= esc($row['no_surat']) ?></td>
                <td><?= esc($row['tahun']) ?></td>
                <td><?= esc($row['tanggal_surat']) ?></td>
                <td><?= esc($row['tanggal_keluar']) ?></td>
                <td><?= esc($row['kepada']) ?></td>
                <td><?= esc($row['perihal']) ?></td>
                <td><?= esc($row['pembuat_surat']) ?></td>
                <td><?= esc($row['divisi']) ?></td>
                <td><?= esc($row['courier']) ?></td>
                <td>
                    <?php if ($row['file']) : ?>
                        <a href="<?= base_url('uploads/surat_keluar/' . $row['file']) ?>" target="_blank">Lihat</a>
                    <?php else : ?>
                        Tidak Ada
                    <?php endif ?>
                </td>
                <td>
                    <a href="<?= site_url('surat_keluar/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= site_url('surat_keluar/delete/' . $row['id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
