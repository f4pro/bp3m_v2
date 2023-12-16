<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Sertifikat
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="program_studi">program Studi</label>
                        <select name="program_studi" id="program_studi" class="form-control" value="<?= set_value('program_studi'); ?>">
                            <option value="">Pilih Program Studi</option>
                            <?php foreach ($prodi as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['nama_ps']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('program_studi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_sk">Nama Sertifikat</label>
                        <input type="text" name="nama_sk" value="<?= set_value('nama_sk'); ?>" class="form-control" id="nama_sk" placeholder="Nama Kategori">
                        <?= form_error('nama_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_sk">Nomor Sertifikat</label>
                        <input type="text" name="no_sk" value="<?= set_value('no_sk'); ?>" class="form-control" id="nama_sk" placeholder="Nomor Kategori">
                        <?= form_error('no_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="strata">Strata</label>
                        <select name="strata" id="strata" class="form-control" value="<?= set_value('strata'); ?>">
                            <option value="D-III">D-III</option>
                            <option value="D-IV">D-IV</option>
                            <option value="Magister">Magister</option>
                        </select>
                        <?= form_error('strata', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">Link Sertifikat</label>
                        <input type="text" name="url" value="<?= set_value('url'); ?>" class="form-control" id="url" placeholder="Link URL">
                    </div>
                    <div class="form-group">
                        <label for="thn_sk">Tahun Sertifikat</label>
                        <input type="text" name="thn_sk" value="<?= set_value('thn_sk'); ?>" class="form-control" id="thn_sk" placeholder="Tahun Sertifikasi">
                        <?= form_error('thn_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="predikat_sk">Predikat Sertifikat</label>
                        <select name="predikat_sk" id="predikat_sk" class="form-control" value="<?= set_value('predikat_sk'); ?>">
                            <option value="Unggul">Unggul</option>
                            <option value="Baik Sekali">Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <?= form_error('predikat_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('sertifikat/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Sertifikat</button>
                </form>
            </div>
        </div>
    </div>
</div>