<?php $con = mysqli_connect("localhost","root","","bp3m_lastworked")?>

<style>
    .justify {
        text-align: justify;
        color: #444444;
    }

    .center {
        text-align: center;
        color: #444444;
    }

    .center3 {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;

    }

    p.word-break {
        word-wrap: break-word;
        text-align: justify;

    }

    #corner {
        border-radius: 15px;
    }

    #corner1 {
        border-radius: 30px;
    }

    #corner2 {
        border-radius: 15px 15px 0px 0px;
    }


    .shadow-lg {
        box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.150) !important
    }

    .hidden {
        display: none;
    }

    .pagination-container {

        display: flex;
        align-items: center;
        position: relative;
        justify-content: center;
    }



    .btn-kategori {
        display: inline-block;
        padding: 5px 10px 5px 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 20px;
        font-family: "", sans-serif;
        font-weight: 1000;
        background: #012970;
        border: 1px solid #012970;
    }

    /* PENCARIAN BERITA */

    .dropbtn {
        background: #36B1F7;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
		border-radius: 8px;
        width: 100%;
        transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -moz-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -webkit-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -o-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -ms-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background: #9CC8F2;
    }

    #myInput {
        max-height: calc(4 * (1em + 8px));
        box-sizing: border-box;
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 90px 12px 45px;
        border: none;
        border-bottom: 1px solid #ddd;
        position: relative;
    }

    #myInput:focus {
        outline: 3px solid #ddd;
    }

    .dropdown-content {
        display: none;
        /*position: absolute;*/
        background-color: #f6f6f6;
        min-width: 119px;
        height: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    .listPage1 {
        padding: 0px;
        text-align: center;
        list-style: none;
    }

    .listPage1 li {
        background-color: #ffffffBD;
        padding: 10px 20px 10px;
        display: inline-block;
        margin: 0 10px;
        cursor: pointer;
    }

    .listPage1 .active {
        background-color: #012970;
        color: #fff;

    }

    .listPage2 {
        padding: 0px;
        text-align: center;
        list-style: none;
    }

    .listPage2 li {
        background-color: #ffffffBD;
        padding: 10px 20px 10px;
        display: inline-block;
        margin: 0 10px;
        cursor: pointer;
    }

    .listPage2 .active {
        background-color: #012970;
        color: #fff;
    }


    .listPage3 {
        padding: 0px;
        text-align: center;
        list-style: none;
    }

    .listPage3 li {
        background-color: #ffffffBD;
        padding: 10px 20px 10px;
        display: inline-block;
        margin: 0 10px;
        cursor: pointer;
    }

    .listPage3 .active {
        background-color: #012970;
        color: #fff;
    }

    /* PENCARIAN BERITA */
    
    .dropbtn {
        background: #36B1F7;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
		border-radius: 8px;
        width: 100%;
        transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -moz-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -webkit-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -o-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
        -ms-transition: color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background: #9CC8F2;
    }

    #myInput {
        max-height: calc(4 * (1em + 8px));
        box-sizing: border-box;
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 90px 12px 45px;
        border: none;
        border-bottom: 1px solid #ddd;
        position: relative;
    }

    #myInput:focus {
        outline: 3px solid #ddd;
    }


    .dropdown-content {
        display: none;
        /*position: absolute;*/
        /* background-color: #f6f6f6; */
        min-width: 119px;
        height: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    .listPage1 {
        padding: 0px;
        text-align: center;
        list-style: none;
    }

    .listPage1 li {
        background-color: #ffffffBD;
        padding: 10px 20px 10px;
        display: inline-block;
        margin: 0 10px;
        cursor: pointer;
    }

    .listPage1 .active {
        background-color: #012970;
        color: #fff;

    }
</style>

<div id="hero" class="hero overlay subpage-hero">
    <div class="hero-content container">
        <div class="hero-text row">
            <div class="col">
                <h1>Berita</h1>
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
            <div class="list1">
                <div class="row gy-4 max-w-3xl mx-auto px-4">
                    <div class="col-md-8">
                        <?php
                        $query = "SELECT * FROM `berita` where status ='publish' ORDER BY id DESC";
                        $r = mysqli_query($con, $query);
                        while ($b = mysqli_fetch_assoc($r)) {
                        ?>

                        <article class="blog-post item1">
                            <a href="<?= base_url('berita_p/berita_isi/') . $b['id'];?>">
                                <img src="<?= base_url('assets/img/berita/'). $b['gambar'];?>" alt="" 
                                style="
                                    height: 300px;
                                    width: 700px;
                                    border-radius: 8px;
                                " class="img-res">                                
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="<?= base_url('berita_p/berita_isi/') . $b['id'];?>"><?= $b['judul'];?></a></h3>
                                <div class="text-right">
                                    <a class="read-more" href="<?= base_url('berita_p/berita_isi/') . $b['id'];?>">Read
                                        more
                                    </a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Admin</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php
                                                $oldDate = strtotime($b['tanggal']);
                                                $newDate = date('d F Y', $oldDate);
                                                echo $newDate
                                            ?>
                                        </a>
                                    </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i><?php foreach ($kategori as $k):
                                         if ($b['kategori'] == $k['id']) {?>
                                            <?=$k['kategori'];?>
                                            <?php }
                            endforeach;?></a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <?php } 
                        ?>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="widget search-form">
                                <h4 class="widget-title">Pencarian</h4>

                                <!-- <div class="dropdown col-xl-12"> -->
                                <button onclick="myFunction()" class="dropbtn col-xl-12">
                                    <i class="fa fa-search"></i>&nbsp;&nbsp;Pencarian Berita
                                </button>
                                <div id="myDropdown" class="dropdown-content col-xl-12">
                                    <input class="col-xl-12" type="text" placeholder="Cari Berita..." id="myInput"
                                        onkeyup="filterFunction()" size="6">
                                    <?php
								$query = "SELECT * FROM `berita`";
								$r = mysqli_query($con, $query);
								while ($row = mysqli_fetch_assoc($r)) {
									?>

                                    <a
                                        href="<?= base_url('berita_p/berita_isi/') . $row['id']; ?>"><b><?= $row['judul'];?></b></a>
                                    <?php } ?>
                                </div><!-- /.search-form -->

                                <div class="widget widget-recent-posts">
                                    <br>
                                    <br>
                                    <h4 class="widget-title">Postingan Terkini</h4>
                                    <?php
							$query = "SELECT * FROM `berita` where status ='publish' ORDER BY id DESC LIMIT 5";
							$r = mysqli_query($con, $query);
							while ($row = mysqli_fetch_assoc($r)) {
						?>

                                    <div class="row">

                                        <div class="col-sm-4">

                                            <img src="<?= base_url('assets/img/berita/') . $row['gambar']; ?>"
                                                style="high:10%, width:10%;" alt="" class="img-fluid">

                                        </div>


                                        <div class="col-sm-8">
                                            <h5><a
                                                    href="<?= base_url('berita_p/berita_isi/') . $row['id'];?>"><?=$row['judul'];?></a>
                                            </h5>

                                            <?php
                                    $oldDate = strtotime($row['tanggal']);
                                        $newDate = date('l , d F Y ', $oldDate);
                                    ?>
                                            <time>
                                                <p><?php echo $newDate ?></p>
                                            </time>
                                        </div>


                                    </div>

                                    <BR>
                                    <?php }?>


                                </div><!-- /.widget-recent-posts -->
                            </div><!-- /.sidebar -->
                        </div>
                    </div>
                </div>


            </div>

            <b>
                        <ul class="listPage1">
                        </ul>
                    </b>
        </div>
    </section><!-- /.section-portfolio -->

</main><!-- /#main -->

<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

<script>
    let thisPage1 = 1;
    let limit1 = 5;
    let list1 = document.querySelectorAll('.list1 .item1');

    function loadItem1() {
        let beginGet = limit1 * (thisPage1 - 1);
        let endGet = limit1 * thisPage1 - 1;
        list1.forEach((item, key) => {
            if (key >= beginGet && key <= endGet) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        })
        listPage1();
    }
    loadItem1();

    function listPage1() {
        let count = Math.ceil(list1.length / limit1);
        document.querySelector('.listPage1').innerHTML = '';

        if (thisPage1 != 1) {
            let prev = document.createElement('li');
            prev.innerText = 'PREV';
            prev.setAttribute('onclick', "changePage1(" + (thisPage1 - 1) + ")");
            document.querySelector('.listPage1').appendChild(prev);
        }

        for (i = 1; i <= count; i++) {
            let newPage = document.createElement('li');
            newPage.innerText = i;
            if (i == thisPage1) {
                newPage.classList.add('active');
            }
            newPage.setAttribute('onclick', "changePage1(" + i + ")");
            document.querySelector('.listPage1').appendChild(newPage);
        }

        if (thisPage1 != count) {
            let next = document.createElement('li');
            next.innerText = 'NEXT';
            next.setAttribute('onclick', "changePage1(" + (thisPage1 + 1) + ")");
            document.querySelector('.listPage1').appendChild(next);
        }
    }

    function changePage1(i) {
        thisPage1 = i;
        loadItem1();
    }
</script>