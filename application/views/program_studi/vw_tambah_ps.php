<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Tambah Data Program Studi
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_ps">Nama Program Studi</label>
                        <input type="text" name="nama_ps" value="<?= set_value('nama_ps'); ?>" class="form-control" id="nama_ps" placeholder="Nama Program Studi">
                        <?= form_error('nama_ps', '<small class="text-danger pl-3">', '</small>'); ?>

                        <label for="nama">Nama kepala Program Studi</label>
                        <input type="text" name="nama_kaprodi" value="<?= set_value('nama_kaprodi'); ?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                        <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>

                        <label for="nama">Deskripsi</label>
                        <textarea type="text" name="deskripsi" value="<?= set_value('deskripsi'); ?>" class="form-control" id="deksripsi" placeholder="deskripsi program studi"></textarea>
                    </div>
                    <a href="<?= base_url('program_studi/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>