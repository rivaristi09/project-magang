<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h2>Edit Surat Keluar</h2>

<form action="<?= site_url('surat_keluar/update/' . $surat['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>No Surat</label>
        <input type="number" name="no_surat" class="form-control" value="<?= esc($surat['no_surat']) ?>" required>
    </div><?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h2>Edit Surat Keluar</h2>

<form action="<?= site_url('surat_keluar/update/' . $surat['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>No Surat</label>
        <input type="number" name="no_surat" class="form-control" value="<?= esc($surat['no_surat']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" value="<?= esc($surat['tahun']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Surat</label>
        <input type="date" name="tanggal_surat" class="form-control" value="<?= esc($surat['tanggal_surat']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Keluar</label>
        <input type="date" name="tanggal_keluar" class="form-control" value="<?= esc($surat['tanggal_keluar']) ?>" required>
    </div>
    <div class="form-group">
        <label>Kepada</label>
        <input type="text" name="kepada" class="form-control" value="<?= esc($surat['kepada']) ?>" required>
    </div>
    <div class="form-group">
        <label>Perihal</label>
        <textarea name="perihal" class="form-control" required><?= esc($surat['perihal']) ?></textarea>
    </div>
    <div class="form-group">
        <label>Pembuat Surat</label>
        <input type="text" name="pembuat_surat" class="form-control" value="<?= esc($surat['pembuat_surat']) ?>" required>
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" value="<?= esc($surat['divisi']) ?>" required>
    </div>
    <div class="form-group">
        <label>Courier</label>
        <input type="text" name="courier" class="form-control" value="<?= esc($surat['courier']) ?>">
    </div>
    <div class="form-group">
        <label>File Baru (Opsional)</label>
        <input type="file" name="file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>

<?= $this->endSection() ?>

    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" value="<?= esc($surat['tahun']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Surat</label>
        <input type="date" name="tanggal_surat" class="form-control" value="<?= esc($surat['tanggal_surat']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Keluar</label>
        <input type="date" name="tanggal_keluar" class="form-control" value="<?= esc($surat['tanggal_keluar']) ?>" required>
    </div>
    <div class="form-group">
        <label>Kepada</label>
        <input type="text" name="kepada" class="form-control" value="<?= esc($surat['kepada']) ?>" required>
    </div>
    <div class="form-group">
        <label>Perihal</label>
        <textarea name="perihal" class="form-control" required><?= esc($surat['perihal']) ?></textarea>
    </div>
    <div class="form-group">
        <label>Pembuat Surat</label>
        <input type="text" name="pembuat_surat" class="form-control" value="<?= esc($surat['pembuat_surat']) ?>" required>
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" value="<?= esc($surat['divisi']) ?>" required>
    </div>
    <div class="form-group">
        <label>Courier</label>
        <input type="text" name="courier" class="form-control" value="<?= esc($surat['courier']) ?>">
    </div>
    <div class="form-group">
        <label>File Baru (Opsional)</label>
        <input type="file" name="file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>

<?= $this->endSection() ?>
