<?php
if (isset($_GET['kd'])) {
    $kd = $_GET['kd'];
    $produkdetail = mysql_query("select * from produk where kdpro='$kd'") or die(mysql_error());
    $dprodukdetail = mysql_fetch_array($produkdetail);
    if (isset($_POST['save'])) {
        $skomentar = "INSERT INTO komentar(id, email, komentar, status, tanggal, kode) VALUES ('','$_POST[email]','$_POST[review]','Tidak','" . DATE('d-M-Y') . "','$kd')";
        $mkomentar = mysql_query($skomentar) or die(mysql_error());
        if ($mkomentar = False) {
            echo "Input Failed..";
        }
    }
} else {
    echo "No Id Selected";
}

?>
<div id="single-product" style="margin-top: 10px;;">
    <div class="container">

        <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
            <div class="product-item-holder size-big single-product-gallery small-gallery">

                <div id="owl-single-product">
                    <div class="single-product-gallery-item" id="slide1">
                        <a data-rel="prettyphoto" href="adminweb/gambar/<?php echo $dprodukdetail['gambar']; ?>">
                            <img class="img-responsive" alt="" src="assets/images/blank.gif"
                                 data-echo="adminweb/gambar/<?php echo $dprodukdetail['gambar']; ?>"/>
                        </a>
                    </div>

                </div>
                <!-- /.single-product-slider -->
            </div>
            <!-- /.single-product-gallery -->
        </div>
        <!-- /.gallery-holder -->
        <div class="no-margin col-xs-12 col-sm-7 body-holder">
            <div class="body">
                <div class="star-holder inline">
                    <?php if ($dprodukdetail['stok'] <= 10) {
                        echo '<div class="star" data-score="1"></div>';
                    } else if ($dprodukdetail['stok'] <= 20) {
                        echo '<div class="star" data-score="2"></div>';
                    } else if ($dprodukdetail['stok'] <= 30) {
                        echo '<div class="star" data-score="3"></div>';
                    } else if ($dprodukdetail['stok'] <= 40) {
                        echo '<div class="star" data-score="4"></div>';
                    } else if ($dprodukdetail['stok'] <= 50) {
                        echo '<div class="star" data-score="5"></div>';
                    } else {
                        echo '<div class="star" data-score="6"></div>';
                    } ?>

                </div>
                <div class="availability "><label>Availability:</label>
                    <?php if ($dprodukdetail['stok'] > 0) {
                    echo '<span class="available">';
                            echo "In stock";
                        } else {
                        echo '<span class="not-available">';
                            echo "Out of stock";
                        } ?>  </span>
                </div>

                <div class="title"><a href="#"><?php echo $dprodukdetail['nama']; ?></a></div>
                <div class="brand"><?php echo $dprodukdetail['vendor']; ?></div>

                <div class="excerpt">
                    <p><?php echo $dprodukdetail['ket']; ?></p>
                </div>

                <div class="prices">
                    <div class="price-current"><?php echo $dprodukdetail['harga']; ?></div>
                    <div class="price-prev"></div>
                </div>
                <form method="post" action="">
                    <div class="qnt-holder">


                            <input name="jumlah" readonly="readonly" type="hidden" value="1"/>


                        <input type="hidden" name="kdpro" value="<?php echo $dprodukdetail['kdpro']; ?>">
                        <input type="hidden" name="harga" value="<?php echo $dprodukdetail['harga']; ?>">
                        <input type="hidden" name="stok" value="<?php echo $dprodukdetail['stok']; ?>">

                        <button type="submit" id="addto-cart" class="le-button huge" name="tmp">add to cart</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['tmp'])) {
                    if (isset($_SESSION['pel'])) {
                        $kdpro = $_POST['kdpro'];
                        $harga = $_POST['harga'];
                        $jumlah = $_POST['jumlah']; //jumlah barang yang dibeli
                        $kdpel = $_SESSION['pel'];
                        $stok = $_POST['stok']; //stok barang
                        if($stok>=$jumlah) { //cek stok masih apa tidak
                            $ctmp = mysql_query("select * from penjualan_tmp WHERE kdpro='$kdpro' and kdpel='$kdpel'") or die(mysql_error());
                            $cek = mysql_num_rows($ctmp); //cek jika ada tinggal update kalau tidak di insert
                            if ($cek > 0) {
                                $utmp = "UPDATE penjualan_tmp set jumlah=jumlah+'$jumlah' WHERE kdpro='$kdpro' and kdpel='$kdpel' ";
                                $utmpu = mysql_query($utmp);
                                echo '<meta http-equiv="refresh" content="0; url=?page=produkdetail&kd='.$kdpro.'">';
                            } else {
                                $tmp = "INSERT INTO penjualan_tmp(id, kdpro, harga, jumlah, kdpel) VALUES ('','$kdpro','$harga','$jumlah','$kdpel')";
                                $mtmp = mysql_query($tmp) or die (mysql_error());
                                if ($mtmp) {
                                    echo '<meta http-equiv="refresh" content="0; url=?page=produkdetail&kd='.$kdpro.'">';
                                } else {
                                    echo "Input failed..";
                                }
                            }
                            $kurang="UPDATE produk set stok=stok-'$jumlah' WHERE kdpro='$kd'";
                            $mkurang=mysql_query($kurang) or die(mysql_error());
                        }else{
                            echo "<script>alert('Stok tidak mencukupi')</script>";
                        }
                    } else {
                        echo '<meta http-equiv="refresh" content="0; url=?page=login">';
                    }
                }
                ?>
                <!-- /.qnt-holder -->
            </div>
            <!-- /.body -->

        </div>
        <!-- /.body-holder -->
    </div>
    <!-- /.container -->
</div>
<!-- /.single-product -->

<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">
            <?php
            $komentar = mysql_query("select * from komentar WHERE kode='$kd' and status='Ya'") or die(mysql_error());
            $countkomen = mysql_num_rows($komentar);
            ?>
            <ul class="nav nav-tabs simple">
                <li class="active"><a href="#reviews" data-toggle="tab">Reviews (<?php echo $countkomen; ?>)</a></li>
            </ul>
            <!-- /.nav-tabs -->

            <div class="tab-content">
                <!-- /.tab-pane #description -->
                <div class="tab-pane active" id="reviews">
                    <div class="comments">
                        <?php
                        if ($countkomen > 0) {
                            while ($dkomentar = mysql_fetch_array($komentar)) { ?>
                                <div class="comment-item">
                                    <div class="row no-margin">
                                        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                            <div class="avatar">
                                                <img alt="avatar" src="assets/images/default-avatar.jpg">
                                            </div>
                                            <!-- /.avatar -->
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                            <div class="comment-body">
                                                <div class="meta-info">
                                                    <div class="author inline">
                                                        <a href="#" class="bold"><?php echo $dkomentar['email'] ?></a>
                                                    </div>
                                                    <div class="date inline pull-right">
                                                        <?php echo $dkomentar['tanggal'] ?>
                                                    </div>
                                                </div>
                                                <!-- /.meta-info -->
                                                <p class="comment-text">
                                                    <?php echo $dkomentar['komentar'] ?>
                                                </p><!-- /.comment-text -->
                                            </div>
                                            <!-- /.comment-body -->

                                        </div>
                                        <!-- /.col -->

                                    </div>
                                    <!-- /.row -->
                                </div>
                            <?php }
                        } else {
                            echo "No review.";
                        } ?>
                        <!-- /.comment-item -->
                    </div>
                    <!-- /.comments -->

                    <div class="add-review row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="new-review-form">
                                <h2>Add review</h2>

                                <form id="contact-form" class="contact-form" method="post">
                                    <div class="row field-row">

                                        <div class="col-xs-12 col-sm-12">
                                            <label>email*</label>
                                            <input class="le-input" name="email" required>
                                        </div>
                                    </div>
                                    <!-- /.field-row -->

                                    <div class="field-row">
                                        <label>your review</label>
                                        <textarea rows="8" class="le-input" name="review" required></textarea>
                                    </div>
                                    <!-- /.field-row -->

                                    <div class="buttons-holder">
                                        <button type="submit" class="le-button huge" name="save">submit</button>
                                    </div>
                                    <!-- /.buttons-holder -->
                                </form>
                                <!-- /.contact-form -->
                            </div>
                            <!-- /.new-review-form -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.add-review -->

                </div>
                <!-- /.tab-pane #reviews -->
            </div>
            <!-- /.tab-content -->

        </div>
        <!-- /.tab-holder -->
    </div>
    <!-- /.container -->
</section>
<!-- /#single-product-tab -->
    