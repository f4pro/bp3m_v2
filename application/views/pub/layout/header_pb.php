<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $judul?> | BP3M Politeknik Caltex Riau</title>

    <meta name="viewport" content="width=1285, maximum-scale=1">

    <!--<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">-->
    <!--<meta name="apple-mobile-web-app-capable" content="yes"> -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets_p/img/apple-touch-icon.png">

    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png"> -->

    <link href="<?php echo base_url();?>assets_p/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets_p/css/style.css" rel="stylesheet">
    <!--<link href="<?php echo base_url();?>assets_p/css/responsive.css" rel="stylesheet">-->
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">

    <link rel="stylesheet" href="<?php echo base_url("");?>assets_p/css/magnific-popup.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

    <div class="navigation-wrap start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?=base_url('home')?>"><img src="<?php echo base_url();?>assets_p/img/logo/remodeled-logowh.png" alt="Logo"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link active" href="<?=base_url('aboutus_p')?>">Tentang Kami</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="<?=base_url('spmi_p')?>">SPMI</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">SPME</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?=base_url('akreditasi_p')?>">Akreditasi</a>
                                        <a class="dropdown-item" href="<?=base_url('sertifikat_p')?>">Sertifikat</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="<?=base_url('renbang_p')?>">Renbang</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="<?=base_url('kegiatan_p')?>">Kegiatan</a>
                                </li>
                                
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="<?=base_url('berita_p')?>">Berita</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="<?= base_url('galeri_p')?>">Galeri</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
