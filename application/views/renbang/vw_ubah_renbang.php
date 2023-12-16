<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Ubah Data Renbang
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $renbang['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Renbang</label>
                            <input type="text" name="nama" value="<?= $renbang['nama']; ?>" class="form-control" id="nama" placeholder="Nama Renbang">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="url">Link URL</label>
                            <input type="text" name="url" value="<?= $renbang['url']; ?>" class="form-control" id="url" placeholder="Link URL">
                            <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('renbang') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>