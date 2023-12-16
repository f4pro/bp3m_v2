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
                <input type="hidden" name="id" value="<?= $member['id']; ?>">
                    <div class="form-group">
                        <label for="nama_member">Nama Member</label>
                        <input type="text" name="nama_member" value="<?= $member['nama_member']; ?>" class="form-control" id="nama_member" placeholder="Nama">
                        <?= form_error('nama_member', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="title_member">Jabatan</label>
                        <input type="text" name="title_member" value="<?= $member['title_member']; ?>" class="form-control" id="title_member" placeholder="Jabatan">
                        <?= form_error('title_member', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <img src="<?= base_url('assets/img/member/') . $member['gambar_member']; ?>" style="width: 100px" class="img-thumbnail">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar_member" id="gambar_member">
                            <label for="gambar_member" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <a href="<?= base_url('member/') ?>" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>