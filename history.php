<?php
if (isset($_SESSION['pel'])){
$hist=$_SESSION['pel'];

$sql=mysql_query("select DISTINCT nojual,tanggal,status from penjualan where kdpel='$hist'") or die (mysql_error());

?>
<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">
            <table class="table table-responsive table-hover table-bordered">
                <thead>

                    <th>#</th>
                    <th>No Transaction</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Act</th>

                </thead>
    <?php $no=0;
    while ($data=mysql_fetch_array($sql)){
        $no++;
        ?>
                <tr>
                    <td height="52"><div align="center"><?php echo $no ?> </div></td>
                    <td><div align="center"><?php echo $data['nojual'] ;?></div></td>
                    <td><div align="center"><?php echo $data['tanggal']; ?></div></td>

                    <td>
                        <div align="center">
                            <?php
                            if ($data['status']=="Belum"){
                                echo "<a class='tmerah' style='border-bottom:none; text-decoration:none;' href='?page=kirimgambar&kd=$data[nojual]'>Kirim Bukti</a>"; }elseif($data['status']=="Konfirmasi"){
                                echo "Tunggu Konfirmasi..."; }else{ echo "Lunas"; } ?>

                        </div></td>
                    <td><div align="center"><a class="tombol_button_hitam" href="?page=notbeli&kd=<?php echo $data['nojual'] ;?>" >Lihat</a></div></td>
                </tr>
    <?php } ?>
            </table>
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <?php include "akun.php"; ?>

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>
    <?php }else{ echo "Please Sign In, click <a href='?page=login'>Here</a>"; }
?>