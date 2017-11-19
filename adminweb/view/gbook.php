<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
  $sql = mysql_query("select * from guestbook order by idguest DESC limit $lim,$batas ") or die (mysql_error());
}else{
  $sql = mysql_query("select * from guestbook WHERE nama regexp '$_POST[cari]' or pesan regexp '$_POST[cari]' order by idguest DESC limit $lim,$batas ") or die (mysql_error());
}
?> 
<table width="639" border="1" class="table table-bordered table-responsive table-hover">
  <tr>
    <td colspan="4">Guest Book</td>

      </tr>
  <tr>
    <td colspan="4"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
  </tr>
  <tr>
    <td width="34">No</td>
    <td>Nama</td>
    <td>Pesan</td>
    <td><div align="center">Act</div></td>
  </tr>
  <?php $no=0;
  while ($data=mysql_fetch_array($sql)){
  $no++;
  ?>
  <tr>
    <td><?php echo $no ?> </td>
    <td><?php echo $data['nama'] ;?></td>
    <td><?php echo $data['pesan']; ?></td>
    <td width="45"><a href="?page=gbookdel&kd=<?php echo $data['idguest'] ;?>" class="btn btn-danger">Del</a></td>
  </tr><?php } ?>
</table>
<ul class="pagination">
  <?php
  $paging = paging_admin("guestbook",$batas,$hal,"index.php?page=gbook&");
  echo $paging;
  ?>
</ul>