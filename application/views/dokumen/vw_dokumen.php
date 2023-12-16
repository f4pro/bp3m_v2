  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <!--<h1 class="h3 mb-4 text-gray-800">Halaman Mahasiswa</h1>
                    <div class="row">
                        <div class="col-md-6"><a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
                        <div class="col-md-12"> -->
      <div class="clearfix">
          <div class="float-left">
              <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
          </div>
          <div class="float-right">
              <a href="<?= base_url('dokumen/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Dokumen</a>
          </div>
      </div>
      <div class="card shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <td>No</td>
                              <td>Kategori</td>
                              <td>Nama</td>
                              <td>URL</td>
                              <td>Status</td>
                              <td>Tanggal Upload</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?= $this->session->flashdata('message'); ?>
                          <?php $i = 1; ?>
                          <?php foreach ($document as $doc) : ?>
                          <?php $url = $doc['url'] ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td>
                                      <?php foreach ($kategori as $k) :
                                            if ($doc['kategori_doc'] == $k['id']) { ?>
                                              <?= $k['kategori']; ?>
                                      <?php }
                                        endforeach; ?>
                                  </td>
                                  <td><?= $doc['nama']; ?></td>
                                  <td><a href="<?= $doc['url'] ; ?>" target="_blank">Akses File</a></td>
                                  <td><?= $doc['status']; ?></td>
                                  <td>
                                      <a href="<?= base_url('dokumen/delete/') . $doc['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('dokumen/edit/') . $doc['id']; ?>" class="badge badge-warning">Edit</a>
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