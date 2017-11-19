<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
  $sql = mysql_query("select * from contact order by kdkontak DESC limit $lim,$batas") or die (mysql_error());
}else{
  $sql = mysql_query("select * from contact WHERE nama regexp '$_POST[cari]' or subjek regexp '$_POST[cari]' order by kdkontak DESC limit $lim,$batas") or die (mysql_error());
}
?><table width="683" class="table table-responsive table-bordered table-hover">
  <tr>
    <td colspan="7"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
  </tr>
  <tr>
    <td width="37">No</td>
    <td>Nama</td>
    <td>Email</td>
    <td>Subject</td>
    <td>Pesan</td>
    <td width="22"><div align="center">Status</div></td>
  </tr>
  <?php $no=0;
  while ($data=mysql_fetch_array($sql)){
  $no++;
  ?>
  <tr>
    <td><?php echo $no ?> </td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['subjek']; ?></td>
    <td><?php echo $data['pesan']; ?></td>
    <td><?php if($data['status']==0){ echo "<a class='btn btn-danger' href='?page=contactstatus&st=$data[kdkontak]'>Belum Dibaca</a>"; }else{ echo "Sudah Dibaca";} ?></a></td>
  </tr>
  <?php } ?>
</table>
<ul class="pagination">
  <?php
  $paging = paging_admin("contact",$batas,$hal,"index.php?page=contact&");
  echo $paging;
  ?>
</ul>