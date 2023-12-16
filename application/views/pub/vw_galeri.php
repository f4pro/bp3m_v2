<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <div id="hero" class="hero overlay subpage-hero galeri-hero">
        <div class="hero-content container">
            <div class="hero-text row">
                <div class="col">
                    <h1>Galeri</h1>
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
            <ul class="portfolio-sorting list-inline text-center">
                <li><a href="<?= base_url('galeri_p'); ?>" class="btn btn-gray">All</a></li>
                <?php foreach ($kategori as $k) : ?>
                <li><a href="<?= base_url('galeri_p/filter/') . $k['id']; ?>"
                        class="btn btn-gray"><?= $k['kategori']; ?></a></li>
                <?php endforeach; ?>
            </ul><!-- /.portfolio-sorting  -->
            <div class="row">
                <?php
                    foreach ($gambar as $g) : ?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/img/galeri_gambar/'). $g['gambar'];?>" class="img-res" alt="">
                        <h4 class="portfolio-item-title"><?= $g['nama'];?></h4><br/>
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="<?= base_url('assets/img/galeri_gambar/'). $g['gambar'];?>"
                            data-target="#image-gallery">

                            <i class="fa fa-arrow-right" aria-hidden="true"><img class="img-thumbnail img-fluid"
                                    src="<?= base_url('assets/img/galeri_gambar/'). $g['gambar'];?>"
                                    alt="Another alt text" style="display: none;"></i>

                        </a>

                    </div><!-- /.portfolio-item -->
                </div>
                <?php 
                endforeach;?>
            </div>
        </div>
    </section><!-- /.section-portfolio -->
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                </div>
            </div>
        </div>
    </div>

</main><!-- /#main -->
<script>
    let modalId = $('#image-gallery');

    $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image')
                    .click(function () {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                        .text($sel.data('title'));
                    $('#image-gallery-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function () {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function () {
                        updateGallery($(this));
                    });
            }
        });

    // build key actions
    $(document)
        .keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
</script>