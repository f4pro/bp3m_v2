<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Detail Kegiatan
            </div>
            <div class="card-body">
                <h4 class="card-title"><?= $kegiatan['nama_kegiatan'] ?></h4>
                <div class="row">
                    <div class="col-md-4">Judul Kegiatan</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $kegiatan['nama_kegiatan'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Kategori</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <?php foreach ($kategori as $k) :
                            if ($kegiatan['kategori'] == $k['id']) { ?>
                                <?= $k['kategori']; ?>
                        <?php }
                        endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Tempat kegiatan</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $kegiatan['tempat_kegiatan'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Waktu kegiatan</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $kegiatan['waktu_kegiatan'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Gambar</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/kegiatan/') . $kegiatan['gambar_kegiatan']; ?>" class="img-thumbnail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Deskripsi</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="10" cols="50%" readonly><?= $kegiatan['deskripsi_kegiatan'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">URL Form Kegiatan</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $kegiatan['link_kegiatan'] ?></div>
                </div>
                <br>
                <div style="text-align: right;"><a href="<?= base_url('kegiatan/') ?>" class="btn btn-primary">Kembali</a></div>
            </div>
        </div>
    </div>
</div>