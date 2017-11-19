<section id="blog-single" style="margin: 10px; 0 10px 0">
    <div class="container">
        <?php
        $berita = mysql_query("SELECT * FROM berita WHERE kdberita='$_GET[kd]' order BY kdberita DESC limit 0,2") or die(mysql_error());
        $dberita = mysql_fetch_array($berita);
        $count = "Update berita set count=count+1 WHERE kdberita='$_GET[kd]'";
        $jalan=mysql_query($count); ?>
        <!-- ========================================= CONTENT ========================================= -->

        <div class="posts col-md-9">

            <div class="post-entry">

                <div class="clearfix">
                    <!-- ========================================== SECTION – HERO ========================================= -->


                    <div class="item">
                        <img width="800px" src="adminweb/img_berita/<?php echo $dberita['gambar']; ?>"
                             class="img-responsive">
                    </div>
                    <!-- /.item -->


                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                </div>
                <!-- /.clearfix -->

                <div class="post-content">
                    <h2 class="post-title"><?php echo $dberita['judul']; ?></h2>
                    <ul class="meta">
                        <li><?php echo $dberita['tanggal']; ?></li>
                    </ul>
                    <!-- /.meta -->

                    <p align="justify"><?php echo $dberita['isi']; ?> </p>

                    <!-- /.row -->
                </div>
                <!-- /.post-content -->
            </div>
            <!-- /.post-entry -->
            <?php
            $kd = $_GET['kd'];
            $komentar = mysql_query("select * from komentar WHERE kode='$kd' and status='Ya'") or die(mysql_error());
            $countkomen = mysql_num_rows($komentar);
            ?>
            <section id="comments" class="inner-bottom-xs">
                <h3><?php echo $countkomen; ?> Comments</h3>
                <?php if ($countkomen > 0) {
                    while ($dkomentar = mysql_fetch_array($komentar)) { ?>
                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img src="assets/images/default-avatar.jpg" alt="avatar">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <header class="row no-margin">
                                                <div class="pull-left">
                                                    <h4 class="author"><a
                                                            href="#"><?php echo $dkomentar['email']; ?></a></h4>
                                                    <span class="date"><?php echo $dkomentar['tanggal']; ?></span>
                                                </div>
                                            </header>
                                        </div>
                                        <p class="comment-content"><?php echo $dkomentar['komentar']; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo "<h2>No Comment</h2>";
                } ?>
                <?php if (isset($_POST['save'])) {
                    $skomentar = "INSERT INTO komentar(id, email, komentar, status, tanggal, kode) VALUES ('','$_POST[email]','$_POST[comment]','Tidak','" . DATE('d-M-Y') . "','$kd')";
                    $mkomentar = mysql_query($skomentar) or die(mysql_error());
                    if ($mkomentar = False) {
                        echo "Input Failed..";
                    }
                } ?>
            </section>
            <section id="reply-block" class="leave-reply">
                <h3>Leave a Reply</h3>


                <form role="form" class="reply-form cf-style-1" method="post" action="">
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>Email*</label>
                            <input class="le-input" name="email" required>
                        </div>

                    </div>

                    <div class="row field-row">
                        <div class="col-xs-12">
                            <label>Comment</label>
                            <textarea rows="10" id="inputComment" class="form-control le-input" name="comment"
                                      required></textarea>
                        </div>
                    </div>


                    <button class="le-button big post-comment-button" type="submit" name="save">Post comment</button>
                </form>

            </section>
        </div>
        <!-- /.posts -->

        <!-- ========================================= CONTENT :END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-md-3">
            <aside class="sidebar blog-sidebar">


                <!-- /.widget -->
                <div class="widget">
                    <h4>About News</h4>

                    <div class="body">
                        <p>News is packaged information about current events happening somewhere else; or,
                            alternatively, news is that which the news industry sells. </p>
                    </div>
                </div>
                <!-- /.widget -->

            </aside>
            <!-- /.sidebar .blog-sidebar -->        </div>
        <!-- /.col -->
        <!-- ========================================= SIDEBAR : END ========================================= -->

        <!-- ========================================= CONTENT ========================================= -->

    </div>
</section>
    