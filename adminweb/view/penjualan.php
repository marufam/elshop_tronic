<?php
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
  $sql = mysql_query("select DISTINCT nojual,tanggal,kdpel,status from penjualan limit $lim,$batas") or die (mysql_error());
}else{
  $sql = mysql_query("select DISTINCT nojual,tanggal,kdpel,status from penjualan  WHERE nojual regexp '$_POST[cari]' or kdpel regexp '$_POST[cari]' limit $lim,$batas") or die (mysql_error());
}
?>
<table width="676" border="1" class="table table-bordered table-responsive table-hover">
  <tr>
    <td colspan="6"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
  </tr>
  <tr>
    <td>No</td>
    <td>No jual</td>
    <td>Tanggal</td>
    <td width="124">Kode Pel</td>
    <td width="134">Status</td>
    <td colspan="2"><div align="center">Act</div></td>
  </tr>
  <?php $no=0;
  while ($data=mysql_fetch_array($sql)){
  $no++;
  ?>
  <tr>
    <td><?php echo $no ?> </td>
    <td><a href="?page=notbeli&kd=<?php echo $data['nojual']; ?>"><?php echo $data['nojual'] ;?></a></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['kdpel']; ?></td>
    <td><?php if($data['status']=="Belum"){ echo "Belum"; }elseif($data['status']=="Konfirmasi"){ echo "<a class='btn btn-warning' href='?page=konfirm&kd=$data[nojual]'>Konfirmasi</a>"; }else{ echo "Lunas"; } ?></td>
    <td><div align="center"><a class="btn btn-danger" href="?page=penjualandel&kd=<?php echo $data['nojual'] ;?>">Del</a></div></td>
  </tr>
  <?php } ?>
</table>
<ul class="pagination">
  <?php
  $paging = paging_admin("penjualan",$batas,$hal,"index.php?page=penjualan&");
  echo $paging;
  ?>
</ul>