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
              <a href="<?= base_url('galeri_video/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Video</a>
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
                              <td>Kategori</td>
                              <td>URL</td>
                              <td>Tanggal</td>
                              <td>Video</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?= $this->session->flashdata('message'); ?>
                          <?php $i = 1; ?>
                          <?php foreach ($galeri_video as $gv) : ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $gv['nama'] ?></td>
                                  <td>
                                      <?php foreach ($kategori as $k) :
                                            if ($gv['kategori_v'] == $k['id']) { ?>
                                              <?= $k['kategori']; ?>
                                      <?php }
                                        endforeach; ?>
                                  </td>
                                  <td><?= $gv['url'] ?></td>
                                  <td><?= $gv['tanggal'] ?></td>
                                  <td>
                                  <video width="320" height="240" controls>
                                                <source src="<?=base_url('assets/video/galeri_video/').$gv['video']?>">
                                                Update browser untuk memainkan video.
                                              </video>
                                  </td>
                                  <td>
                                      <a href="<?= base_url('galeri_video/delete/') . $gv['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('galeri_video/edit/') . $gv['id']; ?>" class="badge badge-warning">Edit</a>
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