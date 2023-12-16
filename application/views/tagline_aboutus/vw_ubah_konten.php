<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Konten Tagline
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $about_us['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Judul</label>
                            <input type="text" name="judul" value="<?= $about_us['judul']; set_value('judul');?>" class="form-control" id="judul" placeholder="Judul">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Isi Konten</label>
                            <textarea class="ckeditor" name="isi_konten" id="ckedtor"><?= $about_us['isi_konten']; set_value('isi_konten');?></textarea>

                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Tagline</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>