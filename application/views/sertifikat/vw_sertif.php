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
              <a href="<?= base_url('Sertifikat/tambah/') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Sertifikat</a>
          </div>
      </div>
      <div class="card shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <td>No</td>
                              <td>Program Studi</td>
                              <td>Strata</td>
                              <td>Nama Sertifikat</td>
                              <td>Nomor Sertifikat</td>
                              <td>URL</td>
                              <td>Tahun SK</td>
                              <td>Predikat SK</td>
                              <td>Aksi</td>
                          </tr>
                      </thead>
                      <tbody>
                          <?= $this->session->flashdata('message'); ?>
                          <?php $i = 1; ?>
                          <?php foreach ($sertifikat as $sertif) : ?>
                              <?php $url = $sertif['url'] ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td>
                                      <?php foreach ($prodi as $ps) :
                                            if ($sertif['program_studi'] == $ps['id']) { ?>
                                              <?= $ps['nama_ps']; ?>
                                      <?php }
                                        endforeach; ?>
                                  </td>
                                  <td><?= $sertif['strata']; ?></td>
                                  <td><?= $sertif['nama_sk']; ?></td>
                                  <td><?= $sertif['no_sk']; ?></td>
                                  <?php if ($url == null){?>
                                    <td>Belum diatur</td>
                                    <?php } else{?>
                                  <td><a href="<?= $url; ?>" target="_blank">Akses File</a></td>
                                  <?php }?>
                                  <td><?= $sertif['thn_sk']; ?></td>
                                  <td><?= $sertif['predikat_sk']; ?></td>
                                  <td>
                                      <a href="<?= base_url('sertifikat/delete/') . $sertif['id']; ?>" class="badge badge-danger">Hapus</a>
                                      <a href="<?= base_url('sertifikat/edit/') . $sertif['id']; ?>" class="badge badge-warning">Edit</a>
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