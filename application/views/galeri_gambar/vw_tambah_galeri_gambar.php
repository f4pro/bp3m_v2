<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Gambar
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Gambar">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori_g">Kategori</label>
                        <select name="kategori_g" id="kategori_g" class="form-control" value="<?= set_value('kategori_g'); ?>">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori_g', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <a href="<?= base_url('galeri_gambar/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Gambar</button>
                </form>
            </div>
        </div>
    </div>
</div>