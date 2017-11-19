<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">

            <?php


            $sql = mysql_query("select * from penjualan_tmp where kdpel='" . $_SESSION['pel'] . "'") or die (mysql_error());
            $g = buatkode('penjualan', 'PJ');
            while ($data = mysql_fetch_array($sql)) {
                $a = $data['kdpro'];
                $b = $data['harga'];
                $j = $data['jumlah'];
                $d = $data['kdpel'];
                $e = $_SESSION['pel'];
                $f = date('d-m-Y');

                $masuk = "insert into penjualan values('$g','$f','$e','Belum','$a','$b','$j','')";
                $q = mysql_query($masuk) or die (mysql_error());
            } ?>
            <?php
            $del = mysql_query("delete from penjualan_tmp where kdpel='" . $_SESSION['pel'] . "'") or die (mysql_error());

            echo "Permintaan Sedang kami proses<br>";
            echo "Untuk pembayaran silahkan kirim pembayaran ke nomer rekening dibawah ini dan kirim foto bukti pembayaran<br>";

            echo '<br>
        <table class="table table-responsive table-hover table-bordered">
            <tr>
                <td>BANK BCA </td>
            <td>Maruf Amien</td>
            <td>524.033.0808</td>
            </tr>
            <tr>
                <td>Bank Mandiri</td>
                <td>Maruf Amien</td>
                <td>125.006.866.8888</td>
            </tr>
            <tr>
                <td>Bank BRI</td>
                <td>Maruf Amien</td>
                <td>0439.01.000035.56.1</td>
            </tr>
            <tr>
                <td>Bank BNI </td>
                <td>Maruf Amien</td>
                <td>180.976.8885</td>
            </tr>
        </table>';
            echo "Apabila anda masih bingung, silahkan kirim pesan ke alamat email kami<br>
<br>
	<b> Terima kasih </b>";

            ?>

        </div>

        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">My Account</h1>

                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>Name</label>

                            <div class="value pull-right"><?php echo $_SESSION['pel_nama'];  ?></div>
                        </li>
                        <li>
                            <label>Username</label>

                            <div class="value pull-right"><?php echo $_SESSION['pel_username'];  ?></div>
                        </li>
                    </ul>
                    <br>
                    <ul  class="tabled-data inverse-bold no-border">
                        <li>
                            <label>Code</label>

                            <div class="value pull-right"><?php echo $_SESSION['pel'];  ?></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>





