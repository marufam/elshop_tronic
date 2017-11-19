<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
  $sql = mysql_query("select * from komentar limit $lim,$batas") or die (mysql_error());
}else{
  $sql = mysql_query("select * from komentar WHERE email regexp '$_POST[cari]' or komentar regexp '$_POST[cari]' limit $lim,$batas") or die (mysql_error());
}
?><table width="683" class="table table-responsive table-bordered table-hover">
  <tr>
    <td colspan="5"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
  </tr>
  <tr>
    <td width="37">No</td>
    <td>Email</td>
    <td colspan="2">Review</td>
    <td width="94">Status</td>
    <td width="22"><div align="center">Act</div></td>
  </tr>
  <?php $no=0;
  while ($data=mysql_fetch_array($sql)){
  $no++;
  ?>
  <tr>
    <td><?php echo $no ?> </td>
    <td><?php echo $data['email']; ?></td>
    <td colspan="2"><?php echo $data['komentar']; ?></td>
    <td><a class="btn btn-success" href="?page=komenstatus&st=<?php echo $data['id'] ;?>"><?php echo $data['status']; ?></a></td>
    <td><a class="btn btn-danger" href="?page=komentardel&kd=<?php echo $data['id'] ;?>">Del</a></td>
  </tr><?php } ?>
</table>
<ul class="pagination">
  <?php
  $paging = paging_admin("komentar",$batas,$hal,"index.php?page=komentar&");
  echo $paging;
  ?>
</ul>