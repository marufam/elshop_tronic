<?php
$batas = 10;
if (!isset($_GET["hal"])) $hal = 1; else $hal = $_GET["hal"];
$lim = ($hal - 1) * $batas;
if(!isset($_POST['cari'])) {
    $sql = mysql_query("select * from produk LEFT JOIN kategori on produk.kategori=kategori.kode order BY produk.kdpro DESC limit $lim,$batas") or die (mysql_error());
}else{
    $sql = mysql_query("select * from produk LEFT JOIN kategori on produk.kategori=kategori.kode WHERE nama regexp '$_POST[cari]' or vendor regexp '$_POST[cari]' order BY produk.kdpro DESC limit $lim,$batas") or die (mysql_error());
}

?>
<table width="639" border="1" class="table table-bordered table-responsive table-hover">
    <tr>
        <td colspan="3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                + Tambah
            </button>
        </td>
        <td width="86"></td>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="8"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
    </tr>
    <tr>
        <td width="34">No</td>
        <td width="57">Kode</td>
        <td width="170">Nama</td>
        <td>Kategori</td>
        <td width="109">Harga</td>
        <td width="42">Stok</td>
        <td colspan="2">
            <div align="center">Act</div>
        </td>
    </tr>
    <?php $no = 0;
    while ($data = mysql_fetch_array($sql)) {
        $no++;
        ?>
        <tr>
        <td><?php echo $no ?> </td>
        <td><?php echo $data['kdpro']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['stok']; ?></td>
        <td width="44"><a href="?page=produkedit&kd=<?php echo $data['kdpro']; ?>" class="btn btn-success">Edit</a></td>
        <td width="45"><a href="?page=produkdel&kd=<?php echo $data['kdpro']; ?>" class="btn btn-danger">Del</a></td>
        </tr><?php } ?>
</table>
<ul class="pagination">
    <?php
    $paging = paging_admin("produk", $batas, $hal, "index.php?page=produk&");
    echo $paging;
    ?>
</ul>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="?page=produkadd" ENCTYPE="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input User</h4>
                </div>
                <div class="modal-body">


                    <table width="282" border="0" class="table ">
                        <tr>
                            <td colspan="3">Produk</td>
                        </tr>
                        <tr>
                            <td width="59">Kode</td>
                            <td width="3">:</td>
                            <td width="206"><label>
                                    <input class="form-control" required type="text" name="a" id="a" value="<?php
                                    $k = buatkode('produk', 'PR');
                                    echo $k ?>">
                                </label></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input class="form-control" required type="text" name="b" id="b"></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td><label>
                                    <select name="c" id="c" class="form-control" required>
                                        <?php
                                        $ka = mysql_query("select * from kategori ") or die (mysql_error());
                                        while ($kate = mysql_fetch_array($ka)) {
                                            ?>
                                            <option
                                                value="<?php echo $kate['kode'] ?>"><?php echo $kate['kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </label></td>
                        </tr>
                        <tr>
                            <td>Merk</td>
                            <td>:</td>
                            <td><input type="text" name="h" id="d2" class="form-control" required/></td>
                        </tr>
                        <tr>
                            <td>Vendor</td>
                            <td>:</td>
                            <td><input type="text" name="i" id="d3" class="form-control" required/></td>
                        </tr>
                        <tr>
                            <td>Tipe</td>
                            <td>:</td>
                            <td><input type="text" name="j" id="d4" class="form-control" required/></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><input type="number" name="d" id="d" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td><input type="number" name="e" id="e" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Ket</td>
                            <td>:</td>
                            <td><textarea class="form-control" required name="f" id="f"></textarea></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td><input class="form-control" type="file" name="g" id="g"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><label>

                                </label></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" name="simpan" id="button" value="Simpan">
                    <input type="reset" name="reset" name="reset" value="reset" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>
