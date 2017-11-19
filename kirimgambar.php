
<?php
if (isset($_POST['save'])) {
    $a = $_FILES['img']['name'];
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        move_uploaded_file($_FILES['img']['tmp_name'], "adminweb/gamrek/" . $a);
    }

    $sql = "update penjualan set gambar='$a' , status='Konfirmasi' where nojual='" . $_GET['kd'] . "'";
    $ma = mysql_query($sql) or die (mysql_error());
    echo '<meta http-equiv="refresh" content="0; url=?page=history">';
}

?>



<?php
if (isset($_SESSION['pel'])) {
    $hist = $_SESSION['pel'];

    $sql = mysql_query("select DISTINCT nojual,tanggal,status from penjualan where kdpel='$hist'") or die (mysql_error());

    ?>
    <section id="cart-page">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-md-9 items-holder no-margin">
                <div class="">
                    <p><h1>Foto Rekening Pembayaran </h1></p>
                </div>
                <form enctype="multipart/form-data" method="post">
                    <table width="454" border="0">
                        <tr>

                            <td width="236"><input class="le-input" type="file" name="img">&nbsp;</td>
                        </tr>
                        <tr>

                            <td colspan="2"><input class="btn btn-success" type="submit" name="save" value="Kirim"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->

            <?php include "akun.php"; ?>
            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div>
    </section>
<?php } else {
    echo "Please Sign In, click <a href='?page=login'>Here</a>";
}
?>
