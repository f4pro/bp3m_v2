<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Detail Berita
            </div>
            <div class="card-body">
                <!-- <h4 class="card-title"><?= $berita['judul'] ?></h4> -->
                <div class="row">
                    <div class="col-md-4">Judul</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['judul'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Author</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['author'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Kategori</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <?php foreach ($kategori as $k) :
                            if ($berita['kategori'] == $k['id']) { ?>
                                <?= $k['kategori']; ?>
                        <?php }
                        endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Status</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['status'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Gambar</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/berita/') . $berita['gambar']; ?>" class="img-thumbnail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Isi</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="10" cols="50%" readonly><?= $berita['isi'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Tanggal</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $berita['tanggal'] ?></div>
                </div>
                <br>
                <div style="text-align: right;"><a href="<?= base_url('berita/') ?>" class="btn btn-primary">Kembali</a></div>
            </div>
        </div>
    </div>
</div>