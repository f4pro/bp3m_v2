<?php $con = mysqli_connect("localhost","root","","bp3m_lastworked")?>

<div id="hero" class="hero overlay detail-hero kegiatan-hero">
        <div class="hero-content container">
            <div class="hero-text row">
                <div class="col">
                    <h1>Detail Kegiatan</h1>
                </div>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tentang Kami</li>
                </ol> -->
            </div>
        </div>
    </div>

    <main id="main" class="site-main">

    <section class="site-section subpage-site-section section-berita">
            
    <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="blog-post">
                            <img src="<?=base_url('assets/img/kegiatan/') . $kegiatan['gambar_kegiatan'];?>" class="img-res" alt="">
                            <div class="post-content">
                                <h2 class="post-title"><?= $kegiatan['nama_kegiatan'];?></h2>
                                <p><?= $kegiatan['deskripsi_kegiatan'];?></p>
  
                                <div class="post-meta">
                                    <h5>Informasi Tambahan</h5>
                                    <span class="post-author">
                                        <a href="#"><i class="fa fa-map-marker"></i> <?= $kegiatan['tempat_kegiatan'];?></a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?php
                                                $oldDate = strtotime($kegiatan['waktu_kegiatan']);
                                                $newDate = date('d F Y', $oldDate);
                                                echo $newDate;
                                            ?>
                                    </a>
                                    </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i> 
		                                <?=$kategori['kategori'];?>
                                    </a>
                                    </span>
                                    <?php if($kegiatan['link_kegiatan']==null){?>
                                    <button type="button" class="btn btn-fill a-override" disabled>Pendaftaran Ditutup</button>
                                    <?php }else{?>
                                    <button type="button" class="btn btn-fill a-override"><a href="<?= $kegiatan['link_kegiatan']?>" class="a-override">Daftar Pelatihan</a></button>
                                    <?php }?>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        
                    </div>

                    <aside class="col-md-4">
                    <div class="sidebar">
                        <div class="widget widget-recent-posts">
                            <h4 class="widget-title">Pelatihan Lainnya</h4>



                            <?php
							$query = "SELECT * FROM `kegiatan` ORDER BY id DESC LIMIT 5";
							$r = mysqli_query($con, $query);
							while ($row = mysqli_fetch_assoc($r)) {
						?>      

                        <div class="row">

                                <div class="col-sm-4">

                                        <img src="<?= base_url('assets/img/kegiatan/') . $row['gambar_kegiatan']; ?>"
                                            style="high:10%, width:10%;" alt="" class="img-fluid">

                                </div>


                                <div class="col-sm-8">
                                    <h5><a href="<?= $row ['id']; ?>"><?=$row['nama_kegiatan'];?></a></h5>

                                                                        <?php
                                    $oldDate = strtotime($row['waktu_kegiatan']);
                                        $newDate = date('l , d F Y ', $oldDate);
                                    ?>
                                    <time><p><?php echo $newDate ?></p></time>
                                </div>


                        </div>

                        <BR>
  <?php }?>

  


                            </div>

                           

                        </div>
                    </div>
                </aside>
                </div>
            </div>

        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->