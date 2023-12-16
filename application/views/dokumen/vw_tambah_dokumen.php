<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Dokumen
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="kategori_doc">Kategori Dokumen</label>
                        <select name="kategori_doc" id="kategori_doc" class="form-control" value="<?= set_value('kategori_doc'); ?>">
                            <option value="" hidden>Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori_doc', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Dokumen</label>
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Dokumen">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" value="<?= set_value('url'); ?>" class="form-control" id="url" placeholder="Url Dokumen">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Dokumen</label>
                        <select name="status" id="status" class="form-control" value="<?= set_value('status'); ?>">
                            <option value="" hidden>Pilih Kategori</option>
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('galeri_gambar/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Gambar</button>
                </form>
            </div>
        </div>
    </div>
</div>