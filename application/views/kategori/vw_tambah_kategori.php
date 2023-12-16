<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Kategori
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" name="kategori" value="<?= set_value('kategori'); ?>" class="form-control" id="kategori" placeholder="Nama Kategori">
                        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('kategori/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>