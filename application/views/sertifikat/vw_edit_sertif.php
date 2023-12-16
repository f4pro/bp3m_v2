<!-- Begin Page Content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Edit Sertifikat
            </div>
            <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $sertifikat['id']; ?>">
                    <div class="form-group">
                        <label for="program_studi">Program Studi <em>(Sebelumnya: <?= $sertifikat['id']; ?>)</em></label>
                        <select name="program_studi" id="program_studi" class="form-control" value="<?= set_value('program_studi'); ?>">
                            <option value="" hidden>Pilih ulang Program Studi</option>
                            <?php foreach ($prodi as $p) : ?>
                                <option value="<?= $p['id']; ?>" <?php if ($p['id'] == $sertifikat['id']){ ?>selected<?php } ?>><?= $p['id'];?> - <?= $p['nama_ps']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('program_studi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_sk">Nama Sertifikat</label>
                        <input type="text" name="nama_sk" value="<?= $sertifikat['nama_sk']; set_value('nama_sk'); ?>" class="form-control" id="nama_sk" placeholder="Nama SK">
                        <?= form_error('nama_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_sk">Nomor Sertifikat</label>
                        <input type="text" name="no_sk" value="<?= $sertifikat['no_sk']; set_value('no_sk'); ?>" class="form-control" id="nama_sk" placeholder="Nomor SK">
                        <?= form_error('no_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="strata">Strata <em>(Sebelumnya: <?= $sertifikat['strata'];?>)</em></label>
                        <select name="strata" id="strata" class="form-control" value="<?= set_value('strata'); ?>">
                            <option value="" hidden>Pilih Ulang Strata</option>
                            <option value="D-III" <?php if ($sertifikat['strata'] == "D-III"){ ?>selected<?php } ?>>D-III</option>
                            <option value="D-IV" <?php if ($sertifikat['strata'] == "D-IV"){ ?>selected<?php } ?>>D-IV</option>
                            <option value="Magister" <?php if ($sertifikat['strata'] == "Magister"){ ?>selected<?php } ?>>Magister</option>
                        </select>
                        <?= form_error('strata', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">Link Sertifikat</label>
                        <input type="text" name="url" value="<?= $sertifikat['url']; set_value('url'); ?>" class="form-control" id="url" placeholder="Link URL">
                    </div>
                    <div class="form-group">
                        <label for="thn_sk">Tahun Sertifikat</label>
                        <input type="text" name="thn_sk" value="<?= $sertifikat['thn_sk']; set_value('thn_sk'); ?>" class="form-control" id="thn_sk" placeholder="Tahun Sertifikasi">
                        <?= form_error('thn_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="predikat_sk">Predikat Sertifikat <em>(Sebelumnya: <?= $sertifikat['predikat_sk'];?>)</em></label>
                        <select name="predikat_sk" id="predikat_sk" class="form-control" value="<?= set_value('predikat_sk'); ?>">
                            <option value="" hidden>Pilih Ulang Predikat</option>
                            <option value="Unggul" <?php if ($sertifikat['predikat_sk'] == "Unggul"){ ?>selected<?php } ?>>Unggul</option>
                            <option value="Baik Sekali" <?php if ($sertifikat['predikat_sk'] == "Baik Sekali"){ ?>selected<?php } ?>>Baik</option>
                            <option value="Baik" <?php if ($sertifikat['predikat_sk'] == "Baik"){ ?>selected<?php } ?>>Baik</option>
                            <option value="A" <?php if ($sertifikat['predikat_sk'] == "A"){ ?>selected<?php } ?>>A</option>
                            <option value="B" <?php if ($sertifikat['predikat_sk'] == "B"){ ?>selected<?php } ?>>B</option>
                            <option value="C" <?php if ($sertifikat['predikat_sk'] == "C"){ ?>selected<?php } ?>>C</option>
                        </select>
                        <?= form_error('predikat_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('sertifikat/') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Sertifikat</button>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>