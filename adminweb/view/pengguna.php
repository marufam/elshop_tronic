<?php
$batas = 10;
if (!isset($_GET["hal"])) $hal = 1; else $hal = $_GET["hal"];
$lim = ($hal - 1) * $batas;
if(!isset($_POST['cari'])) {
    $sql = mysql_query("select * from admin order by id DESC limit $lim,$batas") or die (mysql_error());
}else{
    $sql = mysql_query("select * from admin WHERE username regexp '$_POST[cari]' order by id DESC limit $lim,$batas") or die (mysql_error());
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
    </tr>
    <tr>
        <td colspan="4"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
    </tr>
    <tr>
        <td width="34">No</td>
        <td width="57">Username</td>
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
        <td><?php echo $data['username']; ?></td>
        <td width="44"><a href="?page=penggunaedit&kd=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a></td>
        <td width="45"><a href="?page=penggunadel&kd=<?php echo $data['id']; ?>" class="btn btn-danger">Del</a></td>
        </tr><?php } ?>
</table>
<ul class="pagination">
    <?php
    $paging = paging_admin("admin", $batas, $hal, "index.php?page=pengguna&");
    echo $paging;
    ?>
</ul>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="?page=penggunaadd" ENCTYPE="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input User</h4>
                </div>
                <div class="modal-body">


                    <table width="282" border="0" class="table ">
                        <tr>
                            <td colspan="3">Pengguna</td>
                        </tr>
                        <tr>
                            <td width="59">Id</td>
                            <td width="3">:</td>
                            <td width="206"><label>
                                    <input class="form-control" required type="text" name="a" id="a" value="<?php
                                    $k = buatkode('admin', 'AD');
                                    echo $k ?>">
                                </label></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input class="form-control" required type="text" name="b" id="b"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="c" class="form-control" required/></td>
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
