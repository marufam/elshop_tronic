<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
  $sql = mysql_query("select * from pelanggan limit $lim,$batas") or die (mysql_error());
}else{
  $sql = mysql_query("select * from pelanggan WHERE nama regexp '$_POST[cari]' or username regexp '$_POST[cari]' limit $lim,$batas") or die (mysql_error());
}
?> 
<table width="582" border="1" class="table table-bordered table-responsive table-hover">
  <tr>
    <td colspan="7"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
  </tr>
  <tr>
    <td width="37">No</td>
    <td width="60">Kode</td>
    <td width="63">Nama</td>
    <td width="96">Alamat</td>
    <td width="57">Email</td>
    <td width="144">Status</td>
    <td colspan="2"><div align="center">Act</div></td>
  </tr>
  <?php $no=0;
  while ($data=mysql_fetch_array($sql)){
  $no++;
  ?>
  <tr>
    <td><?php echo $no ?> </td>
    <td><?php echo $data['kdpel'] ;?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><a class="btn btn-info" href="?page=pelangganstatus&st=<?php echo $data['kdpel'] ?>"><?php echo $data['status']; ?></a></td>
    <td width="46"><a class="btn btn-success" href="?page=pelangganedit&kd=<?php echo $data['kdpel'] ;?>">Edit</a></td>
    <td width="45"><a class="btn btn-danger" href="?page=pelanggandel&kd=<?php echo $data['kdpel'] ;?>">Del</a></td>
  </tr><?php } ?>
</table>
<ul class="pagination">
  <?php
  $paging = paging_admin("pelanggan",$batas,$hal,"index.php?page=pelanggan&");
  echo $paging;
  ?>
</ul>