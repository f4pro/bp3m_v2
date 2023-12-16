<div id="hero" class="hero overlay subpage-hero renbang-hero">
        <div class="hero-content container">
            <div class="hero-text row">
                <div class="col">
                    <h1>Perencanaan dan Pengembangan</h1>
                </div>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tentang Kami</li>
                </ol> -->
            </div>
        </div>
    </div>

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-about-us">
            <div class="container">
                <?php foreach ($renbang as $r):?>
                <h2><?= $r['judul'];?></h2>
                <p><?= $r['isi'];?></p>
                <?php endforeach;?>
            </div>
        </section>

        <section class="section-tosystem">
            <div class="container">
                <!-- foreaach -->
                <h3 style="padding-bottom: 40px; font-weight:600;">Sistem Terkait Perencanaan dan Pengembangan</h3>
                <?php foreach($redirect as $redir):?>
                <button class="btn btn-fill-spmi" onclick="window.open('<?= $redir['url'];?>');"><i class="fa fa-external-link"></i> <?= $redir['nama'];?></button>&nbsp;&nbsp;
                <?php endforeach;?>
                </div>
        </section>

        <section class="site-section">
            <div class="container">
                <div class="text-center dokumen-utama-text">
                    <h2>Dokumen Utama</h2>
                </div>
                <div class="row">
                <div class="row">
                    <?php foreach($documen as $doc):
                    if($doc['kategori_doc'] == '5'){?>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="<?= base_url('assets/img/dokumen/') . $doc['gambar']; ?>" class="img-res" alt="">
                            <h4 class="portfolio-item-title"><?= $doc['nama'];?></h4>
                            <a href="<?= $doc['url'];?>" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <?php } 
                    endforeach;?>
                </div>
                </div>
            </div>
            <!-- <a href="#" class="btn btn-fill">Load More</a> -->
        </section><!-- /.section-portfolio -->

        
        

    </main><!-- /#main -->