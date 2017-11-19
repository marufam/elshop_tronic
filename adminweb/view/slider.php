<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
$sql = mysql_query("select * from slider order by kdslider DESC limit $lim,$batas") or die (mysql_error());

?>
<table border="" class="table table-bordered table-responsive table-hover">
    <tr>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                + Tambah
            </button>
        <br><br>

    </tr>
    <tr>
        <td>No</td>
        <td>Slider</td>
        <td>Keterangan</td>
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
        <td><img src="slider/<?php echo $data['slider']; ?>" class="img-responsive" alt=""></td>
        <td><?php echo $data['keterangan']; ?></td>
        <td width="44"><a href="?page=slideredit&kd=<?php echo $data['kdslider']; ?>" class="btn btn-success">Edit</a>
        </td>
        <td width="45"><a href="?page=sliderdel&kd=<?php echo $data['kdslider']; ?>" class="btn btn-danger">Del</a></td>
        </tr><?php } ?>
</table>
<ul class="pagination">
    <?php
    $paging = paging_admin("slider",$batas,$hal,"index.php?page=slider&");
    echo $paging;
    ?>
</ul>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="?page=slideradd" ENCTYPE="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Slider</h4>
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
                                    $k = buatkode('slider', 'SL');
                                    echo $k ?>">
                                </label></td>
                        </tr>
                        <tr>
                            <td>Slider</td>
                            <td>:</td>
                            <td><input class="form-control" required type="file" name="b" id="b"></td>
                        </tr>

                        <tr>
                            <td>Ket</td>
                            <td>:</td>
                            <td><textarea class="form-control" required name="c"></textarea></td>
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
