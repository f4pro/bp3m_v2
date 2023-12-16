
<style>
.image-link {
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in;
}


/* This block of CSS adds opacity transition to background */
.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
	opacity: 0;
	-webkit-backface-visibility: hidden;
	-webkit-transition: all 0.3s ease-out; 
	-moz-transition: all 0.3s ease-out; 
	-o-transition: all 0.3s ease-out; 
	transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
		opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
		opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container, 
.mfp-with-zoom.mfp-removing.mfp-bg {
	opacity: 0;
}



/* padding-bottom and top for image */
.mfp-no-margins img.mfp-img {
	padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
	top: 0;
	bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
	padding: 0;
}



/* aligns caption to center */
.mfp-title {
  text-align: center;
  padding: 6px 0;
}
.image-source-link {
  color: #DDD;
}

/* 
body { -webkit-backface-visibility: hidden; padding: 10px 30px; 
  font-family: "Calibri", "Trebuchet MS", "Helvetica", sans-serif;
} */
   </style>

<div id="hero" class="hero overlay subpage-hero about-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Tentang Kami</h1>

            </div>
        </div>
    </div>

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-about-us">
            <div class="container">
                <?php foreach ($about_us as $ab):?>
                <h2><?= $ab['judul'];?></h2>
                <p><?= $ab['isi_konten'];?></p>
                    <br/>
                <?php endforeach;?>
            </div>
        </section>

        <section class="site-section section-highline section-about-us">
                <div class="container content-high">
                    <?php foreach ($tagline as $tag):?>
                    <h2><?= $tag['judul'];?></h2>
                    <p><?= $tag['isi_konten'];?></p>
                    <?php endforeach;?>
                </div>
        </section>

        <section class="section-struktur">
            <div class="container">
                <h2>Struktur Organisasi</h2>
                <!-- <a href="assets_p/img/photos/struktur-organisasi.jpg" id="without-caption" class="image-link" target="_blank"> -->
                <a href="assets_p/img/photos/struktur-organisasi.jpg" id="without-caption" class="image-link">
                    <img src="assets_p/img/photos/struktur-organisasi.jpg" alt="Struktur organisasi" class="img-fluid"/>
                </a>
            </div>
        </section>

        <section class="section-squad">
            <div class="container">
                <h2>BP3M Squad</h2>
                <div class="profiles">
                    <?php foreach($member as $mem):?>
                    <div class="member">
                        <img src="<?= base_url('assets/img/member/') . $mem['gambar_member']; ?>" class="img-fluid" alt="profile">

                        <div class="col-sm-12 align-self-center" style="height:15%;">
                            <h3 class="user-name "><?= $mem['nama_member'];?></h3>
                        </div>
                        <h5><?= $mem['title_member'];?></h5>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>

        <section class="section-faq">
            <div class="container">
                <h2>Pertanyaan Umum</h2>
                <div id="main-accordion">
                    <div class="container">
                        <?php foreach ($pertanyaan as $per):?>
                        <div class="accordion" id="faq">
                            <!-- foreach -->
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#pertanyaan-<?= $per['id'];?>"
                                        aria-expanded="true" aria-controls="pertanyaan-<?= $per['id'];?>"><?= $per['pertanyaan'];?></a>
                                </div>

                                <div id="pertanyaan-<?= $per['id'];?>" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        <?= $per['jawaban'];?>
                                    </div>
                                </div>
                            </div>
                            <!-- mm -->
                            
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>

        </section>

    </main><!-- /#main -->

    

    