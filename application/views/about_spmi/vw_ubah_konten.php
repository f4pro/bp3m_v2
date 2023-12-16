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
                        <input type="hidden" name="id" value="<?= $spmi['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="judul" value="<?= $spmi['judul']; set_value('judul');?>" class="form-control" id="judul" placeholder="Judul">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Isi Konten</label>
                            <textarea class="ckeditor" name="isi" id="ckedtor"><?= $spmi['isi']; set_value('isi');?></textarea>
                            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <a href="<?= base_url('Aboutus_section') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Update Kategori</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>