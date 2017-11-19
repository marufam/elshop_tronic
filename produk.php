<section id="category-grid">
    <div class="container">

        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">

            <!-- ========================================= PRODUCT FILTER ========================================= -->
            <div class="widget">

                <div class="body bordered">

                    <div class="category-filter">
                        <h2>Testimoni</h2>

                        <table class="table table-hover table-responsive">
                            <?php $guest = mysql_query("SELECT * FROM guestbook ORDER BY idguest DESC limit 0,4") or die(mysql_error());
                            while ($dguest = mysql_fetch_array($guest)) { ?>
                                <tr>
                                    <td><strong><?php echo $dguest['nama']; ?></strong><br><font
                                            size="2px"><?php echo $dguest['pesan'] ?></font></td>
                                </tr>

                            <?php } ?>
                        </table>

                    </div>
                    <!-- /.category-filter -->
                    <form action="" method="post">
                        <div class="price-filter">

                            <div class="price-range-holder">

                                <label>Name</label><input name="nama" class="le-input" type="text" required/>
                                <label>Message</label><textarea name="pesan" class="le-input" required></textarea>


                <span class="filter-button">
                    <input class="btn btn-success" type="submit" name="save_guest" value="Send">
                </span>
                            </div>
                        </div>
                    </form>
                    <?php if (isset($_POST['save_guest'])) {
                        $nama = $_POST['nama'];
                        $pesan = $_POST['pesan'];
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $sql_guest = "INSERT INTO guestbook(idguest, nama, pesan, ip) VALUES ('','$nama','$pesan','$ip')";
                        $msql_guest = mysql_query($sql_guest) or die(mysql_error());
                        if ($msql_guest) {
                            echo '<meta http-equiv="refresh" content="0; url=index.php">';
                        }
                    } ?>
                    <!-- /.price-filter -->

                </div>
                <!-- /.body -->
            </div>
            <!-- /.widget -->

            <!-- /.widget -->
            <!--    <div class="widget">-->
            <!--        <div class="simple-banner">-->
            <!--            <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif"-->
            <!--                             data-echo="assets/images/banner/banner-simple.jpg"/></a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!-- ========================================= FEATURED PRODUCTS ========================================= -->
            <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
        </div>

        <div class="col-xs-9 col-sm-9 no-margin wide sidebar">

            <div id="products-tab" class="wow fadeInUp">
                <div class="container">
                    <div class="tab-holder">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#featured" data-toggle="tab">New Product</a></li>
                            <li><a href="#top-sales" data-toggle="tab">Best Seller</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="featured">
                                <div class="product-grid-holder">
                                    <?php
                                    $produknew = mysql_query("select * from produk order by kdpro DESC limit 0,3") or die(mysql_error());
                                    while ($dproduknew = mysql_fetch_array($produknew)) {
                                        ?>
                                        <div class="col-sm-3 col-md-3 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon blue"><span>new!</span></div>
                                                <div class="image">
                                                    <img alt="" src="assets/images/blank.gif"
                                                         data-echo="adminweb/gambar/<?php echo $dproduknew['gambar']; ?>"/>
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="?page=produkdetail&kd=<?php echo $dproduknew['kdpro']; ?>"><?php echo $dproduknew['nama']; ?></a>
                                                    </div>
                                                    <div class="brand"><?php echo $dproduknew['vendor']; ?></div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev"></div>
                                                    <div
                                                        class="price-current pull-right"><?php echo $dproduknew['harga']; ?></div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="?page=produkdetail&kd=<?php echo $dproduknew['kdpro']; ?>"
                                                           class="le-button">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="tab-pane" id="top-sales">
                                <div class="product-grid-holder">
                                    <?php
                                    $produkbest = mysql_query("select DISTINCT kdpro as jual from penjualan order by nojual DESC  limit 0,3") or die(mysql_error());
                                    while ($dprodukbest = mysql_fetch_array($produkbest)) {
                                        $pro1 = mysql_query("select * from produk where kdpro='" . $dprodukbest['jual'] . "' ") or die (mysql_error());
                                        $bv = mysql_fetch_array($pro1) or die (mysql_error());
                                        ?>
                                        <div class="col-sm-3 col-md-3 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon green"><span>bestseller</span></div>
                                                <div class="image">
                                                    <img alt="" src="assets/images/blank.gif"
                                                         data-echo="adminweb/gambar/<?php echo $bv['gambar']; ?>"/>
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="?page=produkdetail&kd=<?php echo $bv['kdpro']; ?>"><?php echo $bv['nama']; ?></a>
                                                    </div>
                                                    <div class="brand"><?php echo $bv['vendor']; ?></div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev"></div>
                                                    <div
                                                        class="price-current pull-right"><?php echo $bv['harga']; ?></div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="?page=produkdetail&kd=<?php echo $bv['kdpro']; ?>"
                                                           class="le-button">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= BEST SELLERS ========================================= -->
    