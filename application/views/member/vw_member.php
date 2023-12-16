  <!-- Begin Page Content -->
  <div class="container-fluid">
      <div class="clearfix">
          <div class="float-left">
              <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
          </div>
          <div class="float-right">
              <a href="<?= base_url('member/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Member</a>
          </div>
      </div>
      <div class="card shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <td>No</td>
                              <td>Nama</td>
                              <td>Jabatan</td>
                              <td>Gambar</td>
                              <td>Aksi</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?= $this->session->flashdata('message'); ?>
                          <?php $i = 1; ?>
                          <?php foreach ($member as $mem) : ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $mem['nama_member'];?></td>
                                  <td><?= $mem['title_member'];?></td>
                                  <td><img src="<?= base_url('assets/img/member/') . $mem['gambar_member']; ?>"style="width:70px" class="img-thumbnail"></td>
                                  <td>
                                      <a href="<?= base_url('member/delete/') . $mem['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('member/edit/') . $mem['id']; ?>" class="badge badge-warning">Edit</a>
                                  </td>
                              </tr>
                              <?php $i++; ?>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>

      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->