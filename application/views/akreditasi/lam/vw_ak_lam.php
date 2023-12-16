  <!-- Begin Page Content -->
  <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
      <div class="clearfix">
          <div class="float-left">
              <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
          </div>
          <div class="float-right">
              <a href="<?= base_url('akreditasi_lam/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Instrumen LAM</a>
          </div>
      </div>
      <div class="card shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <td>No</td>
                              <td>Nama Instrumen</td>
                              <td>URL</td>
                              <td>Kategori</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($lam as $l) : ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $l['nama_instrumen'] ?></td>
                                  <td><a href="<?= $l['url'] ?>" target="_blank">Akses File</a></td>
                                  <td><?= $l['kategori_ak'] ?></td>
                                  <td>
                                      <a href="<?= base_url('akreditasi_lam/delete/') . $l['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('akreditasi_lam/edit/') . $l['id']; ?>" class="badge badge-warning">Edit</a>
                                  </td>
                              </tr>
                              <?php $i++; ?>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>