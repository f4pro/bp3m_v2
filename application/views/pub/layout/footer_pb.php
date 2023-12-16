<footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo-footer">
                    <img src="<?php echo base_url();?>assets_p/img/logo/pcr1.png" alt="s">
                </div>
                <div class="col-md-3">
                    <h6 style="font-weight: 600;">Contact</h6>
                    <div class="row">
                        <ul class="contact-icons col-3">
                            <li><a href="#" ><i class="fa fa-phone"></i></a> </li>
                            <li><a href="#" ><i class="fa fa-envelope"></i></a> </li>
                            <li><a href="#" ><i class="fa fa-map-marker"></i></a></li>
                        </ul>
                        <ul class="contact-icons col-8 align-self-center">
                            <li class="align-middle">(0765) 53939<br/>(0765) 554224</li>
                            <li >bp3m@pcr.ac.id<br/>pcr@pcr.ac.id</li>
                            <li class="align-middle">Jl. Umbansari No.1 Rumbai Pekanbaru-Riau 28265</li>
                        </ul>
                    </div>
                    
                    
                </div>

                <div class="col-4 col-md-2">
                    <h6 style="font-weight:600;">Pages</h6>
                    <ul class="footer-links">
                        <li><a href="<?= base_url('Spmi_p/') ?>">SPMI</a></li>
                        <li><a href="<?= base_url('Akreditasi_p/') ?>">Akreditasi</a></li>
                        <li><a href="<?= base_url('Sertifikat_p/') ?>">Sertifikasi</a></li>
                        <li><a href="<?= base_url('Renbang_p/') ?>">Renbang</a></li>
                        <li><a href="<?= base_url('Galeri_p/') ?>">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-4 col-md-2">
                    <h6 style="font-weight:600;">External Links</h6>
                    <ul class="footer-links">
                        <li><a href="https://pcr.ac.id/" target="_blank">pcr.ac.id</a></li>
                        <li><a href="https://kegiatan.pcr.ac.id/" target="_blank">Kegiatan</a></li>
                        <li><a href="https://spmi.pcr.ac.id/" target="_blank">SPMI</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
    <footer class="copyright-footer">
    <div class="container">
            <div class="row ">
                <div class="col-md-8 col-sm-6 col-12 align-self-center">
                    <p class="copyright-text">BP3M Politeknik Caltex Riau &copy; 2023.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-12 align-self-center">
                    <ul class="social-icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        if (window.innerWidth <= 1024) {
            document.body.classList.add('force-desktop-mode');
        }
    </script>

   

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/jquery.countTo.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/jquery.shuffle.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/script.js"></script>
    <script src="assets_p/js/jquery.magnific-popup.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script> -->

       

    <script src="<?php echo base_url();?>assets_p/js/script.js"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script src="<?php echo base_url();?>assets_p/js/datatable_cust.js"></script>
    
    <script src="<?php echo base_url();?>assets_p/js/jquery.magnific-popup.min.js"></script>
    <script>
        $('#without-caption').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
    </script>

</body>

</html>