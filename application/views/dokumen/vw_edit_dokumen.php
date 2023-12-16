<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Edit Dokumen
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $dokumen['id']; ?>">
                    <div class="form-group">
                        <label for="kategori_doc">Kategori Dokumen <i>(Sebelumnya: <?= $dokumen['kategori_doc'];?>)</i></label>
                        <select name="kategori_doc" id="kategori_doc" class="form-control" value="<?=set_value('kategori_doc'); ?>">
                            <option value="" hidden>Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['id'];?>-&nbsp;&nbsp;<?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori_doc', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Dokumen</label>
                        <input type="text" name="nama" value="<?= $dokumen['nama']; set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Dokumen">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" value="<?= $dokumen['url']; set_value('url'); ?>" class="form-control" id="url" placeholder="Url Dokumen">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/img/dokumen/') . $dokumen['gambar']; ?>" style="width: 100px" class="img-thumbnail">
                    <div class="form-group">
                        <label for="status">Status Dokumen <i>(Sebelumnya: <?= $dokumen['status'];?>)</i></label>
                        <select name="status" id="status" class="form-control" value="<?= set_value('status'); ?>">
                            <option value="" hidden>Pilih Kategori</option>
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('Dokumen/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Dokumen</button>
                </form>
            </div>
        </div>
    </div>
</div>