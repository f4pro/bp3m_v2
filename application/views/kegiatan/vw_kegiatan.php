  <!-- Begin Page Content -->
  <div class="container-fluid">
      <div class="clearfix">
          <div class="float-left">
              <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
          </div>
          <div class="float-right">
              <a href="<?= base_url('kegiatan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Kegiatan</a>
          </div>
      </div>
      <div class="card shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <td>No</td>
                              <td>Nama Kegiatan</td>
                              <td>Kategori</td>
                              <td>Tempat Kegiatan</td>
                              <td>Waktu Kegiatan</td>
                              <td>Form Kegiatan</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?= $this->session->flashdata('message'); ?>
                          <?php $i = 1; ?>
                          <?php foreach ($kegiatan as $keg) : ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $keg['nama_kegiatan'] ?></td>
                                  <td>
                                      <?php foreach ($kategori as $k) :
                                            if ($keg['kategori'] == $k['id']) { ?>
                                              <?= $k['kategori']; ?>
                                      <?php }
                                        endforeach; ?>
                                  </td>
                                  <td><?= $keg['tempat_kegiatan'] ?></td>
                                  <td><?= $keg['waktu_kegiatan'] ?></td>
                                  <?php if($keg['link_kegiatan']==null){?>
                                    <td>n/a</td>
                                <?php }else{?>
                                  <td><a href="<?= $keg['link_kegiatan'] ?>" target="_blank">Akses Link</a></td>
                                  <?php }?>
                                  <td>
                                      <a href="<?= base_url('kegiatan/delete/') . $keg['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('kegiatan/edit/') . $keg['id']; ?>" class="badge badge-warning">Edit</a>
                                      <a href="<?= base_url('kegiatan/detail/') . $keg['id']; ?>" class="badge badge-info">Detail</a>
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