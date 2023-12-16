<div id="hero" class="hero overlay subpage-hero spmi-hero">
        <div class="hero-content container">
            <div class="hero-text row">
                <div class="col">
                    <h1>Sistem Penjaminan <br/>Mutu Internal</h1>
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
            <?php foreach ($spmi as $s):?>
                <h2><?= $s['judul'];?></h2>
                <p style="text-align: justify;"><?= $s['isi'];?></p>
                    <br/>
                <?php endforeach;?>
            </div>
        </section>

        <section class="section-tosystem">
            <div class="container">
                <h3 style="padding-bottom: 40px; font-weight:600;">Sistem Terkait Penjaminan Mutu Internal</h3>
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
                    <?php foreach($documen as $doc):
                    if($doc['kategori_doc'] == '1'){?>
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
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->