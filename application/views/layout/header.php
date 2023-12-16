<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BP3M Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <?php
            if ($user['role'] == 'Admin') {
            ?>

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                    <div class="sidebar-brand-text mx-3">bp3m.pcr.ac.id</div>
                </a>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Dashboard/') ?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Manajemen Kegiatan
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Kegiatan/') ?>">
                        <i class="fa fa-calendar"></i>
                        <span>Kegiatan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Berita/') ?>">
                        <i class="fa fa-newspaper"></i>
                        <span>Berita</span></a>
                </li>

                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Content Management
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Program_studi/') ?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Program Studi</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Kategori/') ?>">
                        <i class="fas fa-list"></i>
                        <span>Kategori Umum</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHome" aria-expanded="true" aria-controls="collapsefilter">
                        <i class="fa fa-file"></i>
                        <span>Home Page</span>
                    </a>
                    <div id="collapseHome" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= site_url('Timeline/'); ?>">Timeline</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRedirect" aria-expanded="true" aria-controls="collapsefilter">
                        <i class="fa fa-file"></i>
                        <span>Redirect</span>
                    </a>
                    <div id="collapseRedirect" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= site_url('Renbang/'); ?>">Renbang</a>
                            <a class="collapse-item" href="<?= site_url('Spmi/'); ?>">SPMI</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAboutus" aria-expanded="true" aria-controls="collapsefilter">
                        <i class="fa fa-file"></i>
                        <span>Tentang Kami Page</span>
                    </a>
                    <div id="collapseAboutus" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= site_url('Aboutus_section/'); ?>">Konten</a>
                            <a class="collapse-item" href="<?= site_url('Tagline_section/'); ?>">Tagline</a>
                            <a class="collapse-item" href="<?= site_url('Struktur_section/'); ?>">Struktur</a>
                            <a class="collapse-item" href="<?= site_url('Member/'); ?>">Member</a>
                            <a class="collapse-item" href="<?= site_url('Pertanyaan/'); ?>">Pertanyaan Umum</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('About_spmi/') ?>">
                        <i class="fas fa-list"></i>
                        <span>Tentang SPMI</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('About_renbang/') ?>">
                        <i class="fas fa-list"></i>
                        <span>Tentang Renbang</span></a>
                </li>


                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Media
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Galeri_gambar/') ?>">
                        <i class="far fa-file-image"></i>
                        <span>Galeri Foto</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Galeri_video/') ?>">
                        <i class="fas fa-video"></i>
                        <span>Galeri Video</span></a>
                </li>

                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Dokumen dan Manajemen Tabel
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Dokumen/'); ?>">
                        <i class="fa fa-file"></i>
                        <span>Dokumen</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkreditasi" aria-expanded="true" aria-controls="collapsefilter">
                        <i class="fa fa-file"></i>
                        <span>Akreditasi</span>
                    </a>
                    <div id="collapseAkreditasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= site_url('Akreditasi_lam/'); ?>">Tabel LAM</a>
                            <a class="collapse-item" href="<?= site_url('Akreditasi_apt/'); ?>">Tabel APT</a>
                            <a class="collapse-item" href="<?= site_url('Akreditasi_panduan/'); ?>">Tabel Panduan</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Sertifikat/'); ?>">
                        <i class="fa fa-file"></i>
                        <span>Table Sertifikasi</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
            <?php } ?>