<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="color-bg">


    <div class="link-list-row">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-4 ">
                <!-- ============================================================= CONTACT INFO ============================================================= -->
                <div class="contact-info">
                    <div class="footer-logo">
                        <img alt="logo" src="assets/images/logo.png" class="img-responsive" width="250px"/>
                    </div>
                    <!-- /.footer-logo -->

                    <p class="regular-bold"> Hubungi kami gratis tanpa dipungut biaya.</p>

                    <p>
                        Jalan PB. Sudirman, Tanggul, Jember, Indonesia
                        (+628-3847-777--651)
                    </p>

                    <div class="social-icons">
                        <h3>Media Sosial</h3>
                        <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-stumbleupon"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-vk"></a></li>
                        </ul>
                    </div>
                    <!-- /.social-icons -->

                </div>
                <!-- ============================================================= CONTACT INFO : END ============================================================= -->
            </div>

            <div class="col-xs-12 col-md-8 no-margin">
                <!-- ============================================================= LINKS FOOTER ============================================================= -->
                <div class="link-widget">
                    <div class="widget">
                        <h3>Temukan Cepat</h3>
                        <ul>
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
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.link-widget -->

                <div class="link-widget">
                    <div class="widget">
                        <h3>Layanan Pelanggan</h3>
                        <ul>
                            <li><a href="undermaintenance.php">Find a Store</a></li>
                            <li><a href="?page=about">About Us</a></li>
                            <li><a href="?page=contact">Contact Us</a></li>
                            <li><a href="undermaintenance.php">Weekly Deals</a></li>
                            <li><a href="undermaintenance.php">Gift Cards</a></li>
                            <li><a href="undermaintenance.php">Recycling Program</a></li>
                            <li><a href="undermaintenance.php">Community</a></li>
                            <li><a href="undermaintenance.php">Careers</a></li>

                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.link-widget -->

                <div class="link-widget">
                    <div class="widget">
                        <h3>Informasi</h3>
                        <ul>
                            <li><a href="?page=history">My Account</a></li>
                            <li><a href="?page=history">Order Tracking</a></li>
                            <li><a href="undermaintenance.php">FAQs</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.link-widget -->
                <!-- ============================================================= LINKS FOOTER : END ============================================================= -->
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.link-list-row -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-12 no-margin">
                <div class="copyright">
                    &copy; <a href="index.php">Politeknik Negeri Malang</a> - all rights reserved
                </div>
                <!-- /.copyright -->
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.copyright-bar -->

</footer>
<!-- /#footer -->
<!-- ============================================================= FOOTER : END ============================================================= -->
