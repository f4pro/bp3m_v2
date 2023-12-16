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
                        <input type="hidden" name="id" value="<?= $ps['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Program Studi</label>
                            <input type="text" name="nama_ps" value="<?= $ps['nama_ps']; ?>" class="form-control" id="nama_ps" placeholder="Nama Program Studi">
                            <?= form_error('nama_ps', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
						<div class="form-group">
                            <label for="nama">Nama Kepala Program Studi</label>
                            <input type="text" name="nama_kaprodi" value="<?= $ps['nama_kaprodi']; ?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
						<label for="nama">Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control" id="deksripsi" placeholder="deskripsi program studi"><?= $ps['nama_kaprodi']; ?></textarea>
                    </div>
                        <a href="<?= base_url('Program_studi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Update Kategori</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>