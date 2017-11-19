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

            <div id="hero">
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                <?php
                    $slider=mysql_query("SELECT * FROM slider ORDER BY kdslider DESC") or die(mysql_error());
                    while($dslider=mysql_fetch_array($slider)) {
                        ?>

                            <div class="item img-responsive" style="background-image: url(adminweb/slider/<?php echo $dslider['slider']; ?>);"></div>

                        <?php
                    }
                ?></div>

                <!-- /.owl-carousel -->
            </div>

            <!-- ========================================= SECTION – HERO : END ========================================= -->
        </div>
        <!-- /.homebanner-holder -->

    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->