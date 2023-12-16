<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data SPMI
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama SPMI</label>
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama spmi">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">Link URL</label>
                        <input type="text" name="url" value="<?= set_value('url'); ?>" class="form-control" id="url" placeholder="URL spmi">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('spmi/') ?>" class="btn btn-danger">kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>