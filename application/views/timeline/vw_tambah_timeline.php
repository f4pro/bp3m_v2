<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Timeline
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Timeline</label>
                        <input type="text" name="judul" value="<?= set_value('judul'); ?>" class="form-control" id="judul" placeholder="Nama Kategori">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="isi">Deskripsi Timeline</label>
                        <textarea class="ckeditor" id="ckedtor" name="deskripsi"></textarea>
                        <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Tanggal</label>
                        <input type="date" name="tanggal" value="<?= set_value('tanggal'); ?>" class="form-control" id="tanggal">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('timeline/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>