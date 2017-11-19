<?php
error_reporting(0);
$sql = mysql_query("select DISTINCT nojual,tanggal,kdpel,status from penjualan where nojual='" . $_GET['kd'] . "'") or die (mysql_error());
$data = mysql_fetch_array($sql);


?>



        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-md-9 items-holder no-margin">
                <div><h2 align="center">Nota Pembelian</h2>
                </div>
                <table width="911" border="0">
                    <tr>
                        <td width="156">Kode</td>
                        <td width="13">:</td>
                        <td width="728"><?php echo $data['nojual']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><?php echo $data['tanggal']; ?></td>
                    </tr>
                    <tr>
                        <td>Kode Pelanggan</td>
                        <td>:</td>
                        <td><?php echo $data['kdpel']; ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td class="tmerah" style="border-bottom:none;"><?php echo $data['status'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table border="1" class="table table-responsive table-hover table-bordered">
                                <tr class="tmerah" style="background:#CCCCCC">
                                    <td width="10" bgcolor="#CCCCCC">
                                        <div align="center"><strong>No</strong></div>
                                    </td>
                                    <td width="108" bgcolor="#CCCCCC">
                                        <div align="center"><strong>Kode</strong></div>
                                    </td>
                                    <td width="113" bgcolor="#CCCCCC">
                                        <div align="center"><strong>Nama</strong></div>
                                    </td>
                                    <td width="172" bgcolor="#CCCCCC">
                                        <div align="center"><strong>Harga</strong></div>
                                    </td>
                                    <td width="66" bgcolor="#CCCCCC">
                                        <div align="center"><strong>Jumlah</strong></div>
                                    </td>
                                    <td width="150" bgcolor="#CCCCCC">
                                        <div align="center"><strong>Subtotal</strong></div>
                                    </td>
                                </tr>

                                <?php
                                $df = mysql_query("select  penjualan.*, produk.* from penjualan , produk where penjualan.kdpro=produk.kdpro and penjualan.nojual='" . $_GET['kd'] . "'") or die (mysql_error());
                                $no = 1;
                                while ($fd = mysql_fetch_array($df)) {
                                    $no++;
                                    $subtotal = strval($fd['harga']) * strval($fd['jumlah']);
                                    ?>
                                    <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $fd['kdpro']; ?></td>
                                    <td><?php echo $fd['nama']; ?></td>
                                    <td>Rp. <?php echo $fd['harga']; ?></td>
                                    <td><?php echo $fd['jumlah']; ?></td>
                                    <td>Rp. <?php echo $subtotal ?></td>
                                    </tr><?php $total = $total + $subtotal;
                                } ?>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="tmerah" align="center">
                                        <div align="right" class="">
                                            <div align="center">Total</div>
                                        </div>
                                    </td>
                                    <td class="tmerah">Rp. <?php echo $total ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->

            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div>


