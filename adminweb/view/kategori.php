<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
$sql=mysql_query("select * from kategori limit $lim,$batas") or die (mysql_error());
}else{
    $sql=mysql_query("select * from kategori  WHERE kode regexp '$_POST[cari]' or kategori regexp '$_POST[cari]' limit $lim,$batas") or die (mysql_error());
}
?>
 <table width="428" border="1" class="table table-responsive table-bordered table-hover">
  <tr>
    <td width="107" colspan="3"><a href="?page=kategoriadd" class="btn btn-danger" >+Tambah</a></td>

  </tr>
     <tr>
         <td colspan="3"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
     </tr>
  <tr>
    <td><div align="center">Kode</div></td>
    <td><div align="center">Kategori</div></td>
    <td><div align="center">Act</div></td>
  </tr>
<?php while($da=mysql_fetch_array($sql)){?>
  <tr>
    <td><div align="center"><?php echo $da['kode']; ?></div></td>
    <td><div align="center"><?php echo $da['kategori']; ?></div></td>
    <td><div align="center"><a href="?page=kategoriedit&kd=<?php echo $da['kode']; ?>" class="btn btn-success">Edit</a>&nbsp;<a href="?page=kategoridelete&kd=<?php echo $da['kode']; ?>" class="btn btn-danger">Delete</a></div></td>
  </tr>
<?php } ?>
</table>
<ul class="pagination">
    <?php
    $paging = paging_admin("contact",$batas,$hal,"index.php?page=contact&");
    echo $paging;
    ?>
</ul>