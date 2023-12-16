<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Kegiatan
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" value="<?= set_value('nama_kegiatan'); ?>" class="form-control" id="nama_kegiatan">
                        <?= form_error('nama_kegiatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control" value="<?= set_value('kategori'); ?>">
                            <option value="" selected disabled hidden>Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Tempat</label>
                        <input type="text" name="tempat_kegiatan" value="<?= set_value('tempat_kegiatan'); ?>" class="form-control" id="tempat_kegiatan">
                        <?= form_error('tempat_kegiatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="judul">Waktu</label>
                        <input type="datetime-local" name="waktu_kegiatan" value="<?= set_value('waktu_kegiatan'); ?>" class="form-control" id="waktu_kegiatan">
                        <?= form_error('waktu_kegiatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="isi">Deskripsi Kegiatan</label>
                        <textarea class="ckeditor" id="ckedtor" name="deskripsi_kegiatan"></textarea>
                        <?= form_error('deskripsi_kegiatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar_kegiatan" id="gambar_kegiatan">
                            <label for="gambar_kegiatan" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="judul">Link Formulir Kegiatan</label>
                        <input type="text" name="link_kegiatan" value="<?= set_value('link_kegiatan'); ?>" class="form-control" id="link_kegiatan">
                    </div>
                    <a href="<?= base_url('kegiatan/') ?>" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/') ?>vendor/ckeditor/ckeditor.js"></script>