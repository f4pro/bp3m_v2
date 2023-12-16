<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Edit Dokumen Panduan
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_dokumen">Nama Dokumen</label>
                        <input type="text" name="nama_dokumen" value="<?= $panduan['nama_dokumen']; set_value('nama_dokumen');?>" class="form-control" id="nama_dokumen">
                        <?= form_error('nama_dokumen', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL Dokumen</label>
                        <input type="text" name="url" value="<?= $panduan['url']; set_value('url') ?>" class="form-control" id="url">
                    </div>
                    <a href="<?= base_url('akreditasi_panduan/') ?>" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
