<!-- ========================================= MAIN ========================================= -->
<main id="blog" class="inner-bottom-xs" style="margin-top: 10px;">
    <div class="container">

        <div class="row">
            <div class="col-md-9">

                <div class="posts sidemeta">
                    <?php
                    $batas=2;
                    if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
                    $lim = ($hal-1)*$batas;
                    $berita=mysql_query("SELECT * FROM berita order BY kdberita DESC limit $lim,$batas") or die(mysql_error());
                    while($dberita=mysql_fetch_array($berita)){
?>
                    <div class="post format-image">
                        <div class="date-wrapper">
                            <div class="date">
                                <span class="month"><?php echo $dberita['tanggal'] ?></span>
                            </div>
                        </div>
                        <!-- /.format-wrapper -->
                        <div class="post-content">
                            <div class="post-media">
                                <img class="img-responsive" width="800px" src="adminweb/img_berita/<?php echo $dberita['gambar'] ?>" alt="">
                            </div>
                            <h2 class="post-title"><?php echo $dberita['judul'] ?></h2>
                            <ul class="meta">
                                <li>Visited : <?php echo $dberita['count'] ?></li>
                            </ul>
                            <!-- /.meta -->
                            <p><?php
                                $ap = htmlentities(strip_tags($dberita['isi']));
                                $ap1=substr($ap, 0,150);
                                $ap1 = substr($ap, 0, strrpos($ap1, " ")); // potong per spasi kalimat
                                echo $ap1;
                                echo "....."; ?></p>
                            <a href="?page=beritadetail&kd=<?php echo $dberita['kdberita'] ?>" class="le-button huge">Read More</a>
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /.post -->
                    <?php } ?>
                </div>
                <!-- /.posts -->

                <hr/>

                <ul class="pagination blog-pagination">
                    <?php
                    $paging = paging_berita("berita",$batas,$hal,"index.php?page=berita&");
                    echo $paging;
                    ?>
                </ul>
                <!-- /.pagination -->
            </div>
            <!-- /.col -->

            <div class="col-md-3">

                <aside class="sidebar blog-sidebar">

<!--                    <div class="widget clearfix">-->
<!--                        <div class="body">-->
<!--                            <form role="search" class="search-form">-->
<!--                                <div class="form-group">-->
<!--                                    <label class="sr-only" for="page-search">Type your search here</label>-->
<!--                                    <input id="page-search" class="search-input form-control" type="search"-->
<!--                                           placeholder="Enter Keywords...">-->
<!--                                </div>-->
<!--                                <button class="page-search-button">-->
<!--			    <span class="fa fa-search">-->
<!--			    	<span class="sr-only">Search</span>-->
<!--			    </span>-->
<!--                                </button>-->
<!--                               -->
<!--                            </form>-->
<!--                       -->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- /.widget -->
                    <div class="widget">
                        <h4>About News</h4>

                        <div class="body">
                            <p>News is packaged information about current events happening somewhere else; or, alternatively, news is that which the news industry sells. </p>
                        </div>
                    </div>
                    <!-- /.widget -->
<!--                    <div class="widget">-->
<!--                        <div class="simple-banner">-->
<!--                            <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif"-->
<!--                                             data-echo="assets/images/banners/banner-simple.jpg"/></a>-->
<!--                        </div>-->
<!--                    </div>-->
                </aside>
                <!-- /.sidebar .blog-sidebar -->
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</main>
    