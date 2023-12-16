<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Edit Data Video
            </div>
            <div class="card-body">
                <form action="<?=base_url('galeri_video/do_edit')?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$galeri_video['id'];?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?= $galeri_video['nama']; ?>" required class="form-control" id="nama" placeholder="Nama Video">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori_v">Kategori</label>
                        <select name="kategori_v" id="kategori_v" class="form-control" required value="<?= set_value('kategori_v'); ?>">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori_v', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" value="<?= set_value('url'); ?>" required class="form-control" id="url" placeholder="Url Video" value="<?= $galeri_video['url']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="video">Video</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="video" id="video">
                            <label for="video" class="custom-file-label">Choose File</label>
                        </div>
                        <small>*kosongkan Apabila video tidak di ubah.</small>
                    </div>
                    <a href="<?= base_url('galeri_video/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>