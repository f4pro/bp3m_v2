<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Edit data instrumen akreditasi
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_instrumen">Nama Instrumen LAM</label>
                        <input type="text" name="nama_instrumen" value="<?= $lam['nama_instrumen']; set_value('nama_instrumen');?>" class="form-control" id="nama_instrumen">
                        <?= form_error('nama_instrumen', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL dokumen</label>
                        <input type="text" name="url" value="<?= $lam['url']; set_value('url') ?>" class="form-control" id="url">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                        <div class="form-group">
                        <label for="kategori_ak">Kategori</label>
                        <select name="kategori_ak" id="kategori_ak" class="form-control">
                            <option value="LAM Teknik" <?php if($lam['kategori_ak'] == "LAM_Teknik") echo 'selected';?>>LAM Teknik</option>
                            <option value="LAM EMBA" <?php if($lam['kategori_ak'] == "LAM_EMBA") echo 'selected';?>>LAM EMBA</option>
                            <option value="LAM Infokom" <?php if($lam['kategori_ak'] == "LAM_Infokom") echo 'selected';?>>LAM Infokom</option>
                        </select>
                        <?= form_error('kategori_ak', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('akreditasi_lam/') ?>" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
