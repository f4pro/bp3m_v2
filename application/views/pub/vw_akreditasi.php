<head>

    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets_p/DataTables/dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets_p/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets_p/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>

<div id="hero" class="hero overlay subpage-hero akreditasi-hero">
        <div class="hero-content container">
            <div class="hero-text row">
                <div class="col">
                    <h1>Akreditasi</h1>
                </div>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tentang Kami</li>
                </ol> -->
            </div>
        </div>
    </div>

    <main id="main" class="site-main">
        <?php $i = 1;?>

        <section class="site-section">
            <div class="header-tab-ak">
                <h2>Dokumen Lembaga Akreditasi Mandiri (LAM)</h2>
            </div>
            <div class="tab-ak">
                <table id="tab1" class="display table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Instrument</th>
                            <th>Kategori</th>
                            <th>Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lam as $lam) :?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $lam['nama_instrumen']?></td>
                            <td><?= $lam['kategori_ak']?></td>
                            <?php if($lam['url']==null){?>
                            <td>File Belum Tersedia</td>
                            <?php }else{?>
                            <td><a href="<?= $lam['url']?>">Akses File</a></td>
                            <?php }?>

                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </section>
        
        <section class="site-section">
            <div class="header-tab-ak">
                <h2>Dokumen Instrumen Akreditasi Perguruan Tinggi (IAPT) 3.0</h2>
            </div>
            <div class="tab-ak">
            <table id="tab2" class="display table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Instrument</th>
                            <th>Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $j = 1;?>
                        <?php foreach ($apt as $apt):?>
                        <tr>
                            <td><?=$j;?></td>
                            <td><?= $apt['nama_instrumen']?></td>
                            <?php if($apt['url']==null){?>
                            <td>Belum Tersedia</td>
                            <?php }else{?>
                            <td><a href="<?=$apt['url'];?>">Akses File</a></td>
                            <?php }?>

                        </tr>
                        <?php $j++;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="site-section">
            <div class="header-tab-ak">
                <h2>Panduan Pelaksanaan Pemantauan dan Evaluasi Peringkat Akreditasi</h2>
            </div>
            <div class="tab-ak">
            <table id="tab3" class="display table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokumen</th>
                            <th>Akses</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $k = 1;?>
                        <?php foreach ($panduan as $pd):?>
                        <tr>
                            <td><?=$k;?></td>
                            <td><?= $pd['nama_dokumen'];?></td>
                            <?php if($pd['url']==null){?>
                            <td>Belum Tersedia</td>
                            <?php }else{?>
                            <td><a href="<?= $pd['url'];?>">Akses File</a></td>
                            <?php }?>
                                
                        </tr>
                        <?php $k++;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </section>
    </main><!-- /#main -->


    