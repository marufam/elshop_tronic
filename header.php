<header>
    <div class="container no-padding">

        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo">
                <a href="index.php">
                    <img alt="logo" src="assets/images/logo.png" class="img-responsive" width="250px"/>
                </a>
            </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
            <div class="contact-row">
                <div class="phone inline">
                    <i class="fa fa-phone"></i> (+628) 3847 777 651
                </div>
                <div class="contact inline">
                    <i class="fa fa-envelope"></i> artdeffend@<span class="le-color">tronic.com</span>
                </div>
            </div>
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
                <form method="post" action="?page=produklist">
                    <div class="control-group">
                        <input class="search-field" placeholder="Search for products" name="cari"/>
                        <button type="submit" class="search-button btn" name="pencarian"></button>
                    </div>
                </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
            <div class="top-cart-row-container">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                <div class="top-cart-holder dropdown animate-dropdown">

                    <div class="basket">
                        <?php
                        if(!isset($_SESSION['pel'])){
                            $jumlahpro=0;
                            $total=0;
                        }else {
                            $countpro = mysql_query("SELECT * FROM penjualan_tmp JOIN produk on penjualan_tmp.kdpro=produk.kdpro WHERE kdpel='$_SESSION[pel]'") or die(mysql_error());
                            $jumlahpro = mysql_num_rows($countpro);
                            $total = 0;
                            while ($tot = mysql_fetch_array($countpro)) {
                                $subtotal = $tot['harga'] * $tot['jumlah'];
                                $total = $total + $subtotal;
                            }
                        }
                        ?>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <div class="basket-item-count">
                                <span class="count"><?php echo $jumlahpro; ?></span>
                                <img src="assets/images/icon-cart.png" alt=""/>
                            </div>

                            <div class="total-price-basket">
                                <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">Rp. </span><span class="value"><?php echo $total; ?></span>
                    </span>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <?php
                            $sql1=mysql_query("SELECT * FROM penjualan_tmp LEFT JOIN produk on penjualan_tmp.kdpro=produk.kdpro and penjualan_tmp.kdpel='$_SESSION[pel]'");
                            while($df=mysql_fetch_array($sql1)){
                            ?>
                            <li>
                                <div class="basket-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin text-center">
                                            <div class="thumb">
                                                <img alt="" class="img-responsive" src="adminweb/gambar/<?php echo $df['gambar']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <div class="title"> &nbsp;<?php echo $df['nama'] ?></div>
                                            <div class="price"> &nbsp;<?php echo $df['jumlah']; ?> x <?php echo $df['harga']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>


                            <li class="checkout">
                                <div class="basket-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <a href="?page=cart" class="le-button inverse">View cart</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <a href="?page=tmp2h" class="le-button">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- /.basket -->
                </div>
                <!-- /.top-cart-holder -->
            </div>
            <!-- /.top-cart-row-container -->
            <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
        </div>
        <!-- /.top-cart-row -->

    </div>
    <!-- /.container -->
</header>
 