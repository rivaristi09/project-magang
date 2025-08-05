<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Detail Surat Keluar</h2>

<table class="table table-striped">
    <tr><th>No Surat</th><td><?= esc($surat['no_surat']) ?></td></tr>
    <tr><th>Tahun</th><td><?= esc($surat['tahun']) ?></td></tr>
    <tr><th>Tanggal Surat</th><td><?= esc($surat['tanggal_surat']) ?></td></tr>
    <tr><th>Tanggal Keluar</th><td><?= esc($surat['tanggal_keluar']) ?></td></tr>
    <tr><th>Kepada</th><td><?= esc($surat['kepada']) ?></td></tr>
    <tr><th>Perihal</th><td><?= esc($surat['perihal']) ?></td></tr>
    <tr><th>Pembuat Surat</th><td><?= esc($surat['pembuat_surat']) ?></td></tr>
    <tr><th>Divisi</th><td><?= esc($surat['divisi']) ?></td></tr>
    <tr><th>Courier</th><td><?= esc($surat['courier']) ?></td></tr>
    <tr><th>File</th>
        <td>
            <?php if ($surat['file']) : ?>
                <a href="<?= base_url('uploads/surat_keluar/' . $surat['file']) ?>" target="_blank">Lihat File</a>
            <?php else : ?>
                Tidak ada file
            <?php endif ?>
        </td>
    </tr>
</table>

<a href="<?= site_url('surat-keluar') ?>" class="btn btn-secondary">Kembali</a>

<?= $this->endSection() ?>
