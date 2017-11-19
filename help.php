

<div id="top-banner-and-menu">
    <div class="container">

        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown">
                <div class="head"><i class="fa fa-list"></i>Semua Kategori </div>
                <nav class="yamm megamenu-horizontal" role="navigation">
                    <ul class="nav">
                        <?php
                        $kategori=mysql_query("SELECT * FROM kategori ORDER  BY kategori ASC") or die(mysql_error());
                        while($dkategori=mysql_fetch_array($kategori)) {
                            ?>
                            <li>
                                <a href="?page=produklist&kategori=<?php echo $dkategori['kode']; ?>"><?php echo $dkategori['kategori']; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <!-- /.nav -->
                </nav>
                <!-- /.megamenu-horizontal -->
            </div>
            <!-- /.side-menu -->
            <!-- ================================== TOP NAVIGATION : END ================================== -->
        </div>
        <!-- /.sidemenu-holder -->

        <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
            <!-- ========================================== SECTION – HERO ========================================= -->

            <img src="help/1.jpg" class="img-responsive" alt="Cara Pertama"><br>
            <img src="help/2.jpg" class="img-responsive" alt="Cara Pertama"><br>
            <img src="help/3.jpg" class="img-responsive" alt="Cara Pertama">

            <!-- ========================================= SECTION – HERO : END ========================================= -->
        </div>
        <!-- /.homebanner-holder -->

    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->