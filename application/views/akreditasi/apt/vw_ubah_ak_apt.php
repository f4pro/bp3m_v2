<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Edit Instrumen APT
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_instrumen">Nama Instrumen</label>
                        <input type="text" name="nama_instrumen" value="<?= $apt['nama_instrumen']; set_value('nama_instrumen');?>" class="form-control" id="nama_instrumen">
                        <?= form_error('nama_instrumen', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL Instrumen</label>
                        <input type="text" name="url" value="<?= $apt['url']; set_value('url') ?>" class="form-control" id="url">
                    </div>
                    <a href="<?= base_url('akreditasi_apt/') ?>" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
