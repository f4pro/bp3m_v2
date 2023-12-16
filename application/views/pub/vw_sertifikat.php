<head>

    <link rel="stylesheet" href="<?php echo base_url();?>assets_p/DataTables/dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets_p/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets_p/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">


</head>

<div id="hero" class="hero overlay subpage-hero sertifikasi-hero">
        <div class="hero-content container">
            <div class="hero-text row">
                <div class="col">
                    <h1>Sertifikat</h1>
                </div>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tentang Kami</li>
                </ol> -->
            </div>
        </div>
    </div>

    <main id="main" class="site-main">



    <!-- Bagian sini -->
        <section class="site-section">
            <div class="header-tab-ak">
                <h2>Sertifikat Badan Akreditasi Nasional Perguruan Tinggi Program Studi Politeknik Caltex Riau</h2>
            </div>
            <div class="tab-ak">
                <table id="example" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program Studi</th>
                        <th>Strata</th>
                        <th>No. SK</th>
                        <th>Tahun SK</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
foreach ($sertif as $ser): ?>

                    <tr>
                        <td><?=$i;?></td>
                        <td>
                            <?php foreach ($prodi as $ps):
                            if ($ser['program_studi'] == $ps['id']) {?>
		                        <?=$ps['nama_ps'];?>
		                        <?php }
                            endforeach;?>
                        </td>
                        <td><?=$ser['strata'];?></td>
                        <?php if($ser['url']==null){?>
                        <td><?=$ser['no_sk']?></td>
                        <?php }else{?>
                        <td><a href="<?=$ser['url'];?>" target="_blank"><?=$ser['no_sk']?></a></td>
                        <?php }?>
                        <td><?=$ser['thn_sk'];?></td>
                        <td><?=$ser['predikat_sk'];?></td>
                    </tr>
                        <?php $i++;
endforeach;?>
                </tbody>
                </table>
            </div>
        </section>
        <!-- sampai sini auto generate -->


    </main><!-- /#main -->


    <script src="<?php echo base_url();?>assets_p/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/DataTables/dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/DataTables/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets_p/js/jquery.min.js"></script>

    <!-- <script>
        $(document).ready(function () {
            $('table').DataTable({});
        $('#example').DataTable({
            lengthMenu:[
                [5,10,25,50,100,-1],
                [5,10,25,50,100,"All"]
            ]
        });
    table.buttons().container()
        .appendTo('#table_wrapper .col-md-5:eq(0)');
});
    </script> -->

