<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">
            <?php
            $total=0;
            $cart=mysql_query("SELECT * FROM penjualan_tmp LEFT JOIN produk on produk.kdpro = penjualan_tmp.kdpro where kdpel='$_SESSION[pel]' ORDER BY penjualan_tmp.kdpro ASC")or die(mysql_error());
            while($dcart=mysql_fetch_array($cart)){
                    ?>
            <div class="row no-margin cart-item">
                <div class="col-xs-12 col-sm-2 no-margin">
                    <a href="#" class="thumb-holder">
                        <img class="lazy" alt="" src="adminweb/gambar/<?php echo $dcart['gambar']; ?>"/>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-5 ">
                    <div class="title">
                        <a href="?page=produkdetail&kd=<?php echo $dcart['kdpro']; ?>"><?php echo $dcart['nama']; ?></a>
                    </div>
                    <div class="brand"><?php echo $dcart['vendor']; ?></div>
                </div>

                <div class="col-xs-12 col-sm-3 no-margin">
                    <div class="quantity">
                        <div class="le-quantity">
                            <?php echo $dcart['jumlah']; ?>&nbsp;x&nbsp;<?php echo $dcart['harga']; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-2 no-margin">
                    <div class="price">
                        <?php $subtotal=$dcart['jumlah']*$dcart['harga']; echo "Rp.".$subtotal;
                                $total=$total+$subtotal;?>
                    </div>
                    <a class="close-btn" href="?page=tmpdel&kd=<?php echo $dcart['kdpro']; ?>&jumlah=<?php echo $dcart['jumlah']; ?>"></a>
                </div>
            </div>
            <?php } ?>
            <!-- /.cart-item -->
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>

                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>

                            <div class="value pull-right"><?php echo "Rp.".$total; ?></div>
                        </li>
                        <li>
                            <label>shipping</label>

                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>

                            <div class="value pull-right"><?php echo "Rp.".$total; ?></div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big"
                           href="?page=tmp2h">checkout</a>
                        <a class="simple-link block"
                           href="index.php">continue
                            shopping</a>
                    </div>
                </div>
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>
    