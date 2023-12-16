<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Edit Data Member
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $struktur['id']; ?>">
                    <div class="form-group">
                        <img src="<?= base_url('assets/img/struktur/') . $struktur['gambar']; ?>" style="width: 100px" class="img-thumbnail">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>');?>

                        </div>
                    </div>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>