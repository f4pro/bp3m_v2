<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Konten
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Judul</label>
                        <input type="text" name="judul" value="<?= set_value('judul'); ?>" class="form-control" id="judul" placeholder="judul">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Isi Konten</label>
                        <textarea class="ckeditor" name="isi" id="ckedtor"></textarea>
                        <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('About_spmi/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>