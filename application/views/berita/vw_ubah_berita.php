<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Ubah Data Berita
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $berita['id']; ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="<?= $berita['judul']; ?>" class="form-control" id="judul" placeholder="Judul Berita">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>" <?php if ($berita['kategori'] == $k['id']) {
                                                                        echo "selected";
                                                                    } ?>> <?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita</label>
                        <textarea class="ckeditor" name="isi" id="ckedtor"><?= $berita['isi']; ?></textarea>
                        <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" value="<?= set_value('status'); ?>">
                            <option value="">Pilih status</option>
                            <option value="Draft" <?php if ($berita['status'] == 'Draft') { echo 'selected'; } ?>>Draft</option>
                            <option value="Publish" <?php if ($berita['status'] == 'Publish') { echo 'selected'; } ?>>Publish</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <img src="<?= base_url('assets/img/berita/') . $berita['gambar']; ?>" style="width: 100px" class="img-thumbnail">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <a href="<?= site_url('berita/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="edit" class="btn btn-primary float-right">Update Berita</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>