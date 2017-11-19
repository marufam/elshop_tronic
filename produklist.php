<?php
$batas=6;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
error_reporting(0);
$katg=$_GET['kategori'];

?>


<section id="category-grid">
    <div class="container">

        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">


            <!-- ========================================= LINKS ========================================= -->
            <div class="widget">
                <h1 class="border">Kategori</h1>
                    <nav class=" megamenu-horizontal" role="navigation">
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

                <!-- /.body -->
            </div>
            <!-- /.widget -->
            <!-- ========================================= LINKS : END ========================================= -->


        </div>
        <!-- ========================================= SIDEBAR : END ========================================= -->

        <!-- ========================================= CONTENT ========================================= -->

        <div class="col-xs-12 col-sm-9 no-margin wide sidebar">

            <div id="grid-page-banner">
                <a href="#">
                    <img src="banner3.jpg" class="img-responsive" alt="Promo"/>
                </a>
            </div>

            <section id="gaming">
                <div class="grid-list-products">
                    <div class="tab-content">
                        <div id="grid-view" class="products-grid fade tab-pane in active">

                            <div class="product-grid-holder">
                                <div class="row no-margin">
                                    <?php
                                    if(isset($_POST['pencarian'])) {
                                        $produk_kat = mysql_query("SELECT * FROM produk where nama REGEXP '$_POST[cari]' or kategori REGEXP '$_POST[cari]' or ket REGEXP '$_POST[cari]' ORDER BY kdpro DESC");
                                    }else if(isset($_GET['kategori'])){
                                        $produk_kat = mysql_query("SELECT * FROM produk where kategori='$_GET[kategori]' ORDER BY kdpro DESC limit $lim,$batas");
                                    }else{
                                        $produk_kat = mysql_query("SELECT * FROM produk  ORDER BY kdpro DESC limit $lim,$batas");
                                    }
                                    while($dproduk_kat=mysql_fetch_array($produk_kat)){
                                    ?>
                                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                        <div class="product-item">
<!--                                            <div class="ribbon blue"><span>new</span></div>-->
                                            <div class="image">
                                                <img  alt="" src="assets/images/blank.gif"
                                                     data-echo="adminweb/gambar/<?php echo $dproduk_kat['gambar'] ?>"/>
                                            </div>
                                            <div class="body">
                                                <div class="title">
                                                    <a href="?page=produklist&kategori=<?php echo $dproduk_kat['kategori'] ?>"><?php echo $dproduk_kat['nama'] ?></a>
                                                </div>
                                                <div class="brand"><?php echo $dproduk_kat['vendor'] ?></div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev"></div>
                                                <div class="price-current pull-right"><?php echo $dproduk_kat['harga'] ?></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="?page=produkdetail&kd=<?php echo $dproduk_kat['kdpro'] ?>" class="le-button">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.product-item -->
                                    </div>
                                    <!-- /.product-item-holder -->
                                <?php } ?>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.product-grid-holder -->

                            <div class="pagination-holder">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 text-left">
                                        <ul class="pagination ">
                                            <?php
                                            if(isset($_GET['kategori'])) {
                                                $paging = paging_kategori("produk", $batas, $hal, "index.php?page=produklist&kategori=1&", $katg);
                                                echo $paging;
                                            }else{
                                                $paging = pagingall("produk", $batas, $hal, "index.php?page=produklist&");
                                                echo $paging;
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.pagination-holder -->
                        </div>
                        <!-- /.products-grid #grid-view -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.grid-list-products -->

            </section>
            <!-- /#gaming -->
        </div>
        <!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->
    </div>
    <!-- /.container -->
</section>
    