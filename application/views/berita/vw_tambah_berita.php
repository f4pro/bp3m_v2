<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Berita
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="<?= set_value('judul'); ?>" class="form-control" id="judul" placeholder="Judul Berita">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control" value="<?= set_value('kategori'); ?>">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita</label>
                        <textarea class="ckeditor" id="ckedtor" name="isi"></textarea>
                        <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" value="<?= set_value('status'); ?>">
                            <option value="">Pilih status</option>
                            <option value="Draft">Draft</option>
                            <option value="Publish">Publish</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>
                    </div>

                    <a href="<?= base_url('berita/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Berita</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>