  <!-- Begin Page Content -->
  <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
      <div class="clearfix">
          <div class="float-left">
              <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
          </div>
          <div class="float-right">
              <a href="<?= base_url('timeline/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Kategori</a>
          </div>
      </div>
      <div class="card shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <td>No</td>
                              <td>Nama Timeline</td>
                              <td>Deskripsi</td>
                              <td>Tanggal</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($timeline as $t) : ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $t['judul'] ?></td>
                                  <td><?= $t['deskripsi'] ?></td>
                                  <td><?= $t['tanggal'] ?></td>
                                  <td>
                                      <a href="<?= base_url('timeline/delete/') . $t['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('timeline/edit/') . $t['id']; ?>" class="badge badge-warning">Edit</a>
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