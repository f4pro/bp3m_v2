<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Member
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_member">Nama</label>
                        <input type="text" name="nama_member" value="<?= set_value('nama_member'); ?>" class="form-control" id="nama_member" placeholder="Nama Member">
                        <?= form_error('nama_member', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="title_member">Jabatan</label>
                        <input type="text" name="title_member" value="<?= set_value('title_member'); ?>" class="form-control" id="title_member" placeholder="Jabatan">
                        <?= form_error('title_member', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="gambar_member">Foto</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar_member" id="gambar_member">
                            <label for="gambar_member" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <a href="<?= base_url('member/') ?>" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>