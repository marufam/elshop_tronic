<div class="col-xs-12 col-md-3 no-margin sidebar ">
    <div class="widget cart-summary">
        <h1 class="border">My Account</h1>
        <?php $sql=mysql_query("SELECT * FROM pelanggan WHERE kdpel='$_SESSION[pel]'")or die(mysql_error());
        $dpel=mysql_fetch_array($sql);?>
        <div class="body">
            <ul class="tabled-data no-border inverse-bold">
                <li>
                    <label>Name</label>

                    <div class="value pull-right"><?php echo $dpel['nama']; ?></div>
                </li>
                <li>
                    <label>Username</label>

                    <div class="value pull-right"><?php echo $dpel['username']; ?></div>
                </li>
            </ul>
            <br>
            <ul class="tabled-data inverse-bold no-border">
                <li>
                    <label>Code</label>

                    <div class="value pull-right"><?php echo $_SESSION['pel']; ?></div>
                </li>
                <li>
                    <div class="value pull-right"><a href="?page=akunedit"><button class="btn btn-success">Change</button></a></div>
                </li>
                <br>
            </ul>
        </div>
    </div>
    <!-- /.widget -->
</div>
<!-- /.sidebar -->
