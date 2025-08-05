<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<h2>Tambah Surat Keluar</h2>

<form action="<?= site_url('surat_keluar/store') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <div class="form-group">
        <label>No Surat</label>
        <input type="number" name="no_surat" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Tanggal Surat</label>
        <input type="date" name="tanggal_surat" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Tanggal Keluar</label>
        <input type="date" name="tanggal_keluar" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kepada</label>
        <input type="text" name="kepada" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Perihal</label>
        <textarea name="perihal" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Pembuat Surat</label>
        <input type="text" name="pembuat_surat" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Courier</label>
        <input type="text" name="courier" class="form-control">
    </div>
    <div class="form-group">
        <label>Upload File</label>
        <input type="file" name="file" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-2">Simpan</button>
</form>

<?= $this->endSection() ?>
