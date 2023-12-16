<?php $con = mysqli_connect("localhost","root","","bp3m_lastworked")?>

<div id="hero" class="hero overlay detail-hero">
    <div class="hero-content container">
        <div class="hero-text row">
            <div class="col">
                <h1>Detail Berita</h1>
                <!-- <h1><?= $berita['judul'];?></h1> -->
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
                        <img src="<?=base_url('assets/img/berita/') . $berita['gambar'];?>" class="img-res" alt="">
                        <div class="post-content">
                            <h2 class="post-title"><?= $berita['judul'];?></h2>
                            <p><?= $berita['isi'];?></p>

                            <div class="post-meta">
                                <span class="post-author">
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                </span>
                                <span class="post-date">
                                    <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?php
                                                $oldDate = strtotime($berita['tanggal']);
                                                $newDate = date('d F Y', $oldDate);
                                                echo $newDate;
                                            ?>
                                    </a>
                                </span>
                                <span class="post-category">
                                    <a href=""><i class="fa fa-folder" aria-hidden="true"></i>
                                        <?php foreach ($kategori as $k):
                                         if ($berita['kategori'] == $k['id']) {?>
                                            <?=$k['kategori'];?>
                                            <?php }
                            endforeach;?>
                                    </a>
                                </span>
                            </div><!-- /.post-meta -->
                        </div><!-- /.post-content -->
                    </article><!-- /.blog-post -->

                </div>

                <aside class="col-md-4">
                    <div class="sidebar">
                        <div class="widget widget-recent-posts">
                            <h4 class="widget-title">Berita Lainnya</h4>



                            <?php
							$query = "SELECT * FROM `berita` ORDER BY id DESC LIMIT 5";
							$r = mysqli_query($con, $query);
							while ($row = mysqli_fetch_assoc($r)) {
						?>      

                        <div class="row">

                                <div class="col-sm-4">

                                        <img src="<?= base_url('assets/img/berita/') . $row['gambar']; ?>"
                                            style="high:10%, width:10%;" alt="" class="img-fluid">

                                </div>


                                <div class="col-sm-8">
                                    <h5><a href="<?= $row ['id']; ?>"><?=$row['judul'];?></a></h5>

                                                                        <?php
                                    $oldDate = strtotime($row['tanggal']);
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