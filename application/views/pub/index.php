
<div id="carouselLandPage" class="carousel slide" data-ride="carousel" data-touch="false" data-pause="false" data-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets_p/img/photos/pic9.JPG" class="img-fluid d-block w-90" alt="img1">
            </div>
            <div class="carousel-item">
                <img src="assets_p/img/photos/pic23.jpg" class="img-fluid d-block w-90" alt="img2">
            </div>
            <div class="carousel-item">
                <img src="assets_p/img/photos/pic20.jpg" class="img-fluid d-block w-90" alt="img3">
            </div>
            <div class="container-carousel">
                <h1 class="col-7">Sukses yang besar, berawal dari rencana yang tepat</h1>
            </div>
        </div>
    </div>


    <main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 align-self-center">
                        <h2>Betapa pentingnya perencanaan yang tepat</h2>
                        <p>Tanpa perencanaan yang baik, pelaksanaan penjaminan mutu bisa sembarangan, tidak terarah, dan hasilnya sulit diukur. Dengan perencanaan yang terstruktur, proses penjaminan mutu dapat dilaksanakan secara menyeluruh, kendala-kendala yang ada dapat dihubungkan sebelumnya, pundi-pundi dapat dialokasikan secara efisien, dan sasaran mutu yang jelas dapat dicapai secara lebih berkesinambungan.</p>
                    </div>
                    <div class="col-sm-7 ">
                        <img src="assets_p/img/photos/pic10.jpg" class="float-right img-fluid">
                    </div>
                </div>
            </div>
        </section><!-- /.section-features -->

        <section class="site-section section-services gray-bg text-center">
            <div class="container">
                <h2 style="font-weight: 600;">Sejauh yang kami tempuh</h2>
            </div>
            <div class="container-tl">
                <div class="timeline">
                    <ul>
                        <?php foreach($timeline as $tl):?>
                        <li>
                            <div class="timeline-content">
                                <h3 class="date" style="font-weight: 500;">
                                <?php
                                    $oldDate = strtotime($tl['tanggal']);
                                    $newDate = date('d F Y', $oldDate);
                                    echo $newDate
                                ?>
                                </h3>
                                <h1 style="font-weight: 600;"><?= $tl['judul'];?></h1>
                                <p><?= $tl['deskripsi'];?></p>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            

        </section><!-- /.section-services -->


        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center heading-separator">
                    <h2>Terlusuri lebih lanjut</h2>
                </div>
                <div class="redirect-berita">
                    <button onclick="location.href='<?= base_url('berita_p  ')?>'"  class="btn btn-fill">Load More</button>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
