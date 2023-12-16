<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Ubah Data Kategori
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Pertanyaan</label>
                        <input type="text" name="pertanyaan" value="<?= $pertanyaan['pertanyaan']; set_value('nama_ps'); ?>" class="form-control" id="kategori">
                        <?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                    <label for="nama">Jawaban</label>
                    <textarea class="ckeditor" id="ckedtor" name="deskripsi_kegiatan"><?= $pertanyaan['jawaban'];?></textarea>
                        <?= form_error('jawaban', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <a href="<?= base_url('Pertanyaan/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>
</div>