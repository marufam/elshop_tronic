<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">

        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="?page=produklist">All Product</a></li>
                <li><a href="?page=berita">News</a></li>
                <li><a href="?page=contact">Contact Us</a></li>
                <li><a href="?page=help">Help</a></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <?php if(isset($_SESSION['pel_username'])){ ?>
                <ul class="right">
                    <li><a href="?page=history">Account</a></li>
                    <li><a href="?page=logout">Logout</a></li>
                </ul>
            <?php }else{ ?>
            <ul class="right">
                <li><a href="?page=login">Register</a></li>
                <li><a href="?page=login">Login</a></li>
            </ul>
            <?php } ?>

        </div>
        <!-- /.col -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.top-bar -->
   