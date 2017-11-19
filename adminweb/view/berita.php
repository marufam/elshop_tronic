 <a class="btn btn-danger" href="?page=beritaadd" style=""> Tambah </a>

<table border="0"  class="table table-hover table-bordered table-responsive">
  <tr>
    <td colspan="7"><form action="" method="post">Pencarian <input type="text" name="cari"></form></td>
  </tr>
  <tr style="">
    <td >No</td>
    <td >Gambar</td>
    <td >Judul</td>
    <td >Isi</td>
    <td >Tanggal</td>
    <td colspan="2"  width="10%"><center>Aksi</center></td>

  </tr>
<?php
$no=1;
$batas=10;
if(!isset($_GET["hal"]))$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1)*$batas;
if(!isset($_POST['cari'])) {
  $sql = mysql_query("select * from berita order by kdberita limit $lim,$batas");
}else{
  $sql = mysql_query("select * from berita WHERE judul regexp '$_POST[cari]' or isi regexp '$_POST[cari]' order by kdberita limit $lim,$batas");
}
while($data=mysql_fetch_array($sql)){
?>
  <tr>
  <br>
    <td><?php echo $no; ?></td>
  <td><?php echo "<img src='img_berita/$data[gambar]' width='100px'>"; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php 
              $ap=htmlentities(strip_tags($data['isi']));
              $ap1=substr($ap, 0,150);
              $ap1 = substr($ap,0,strrpos($ap1," ")); // potong per spasi kalimat
              echo $ap1; echo"....."; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td> 
      <center>
      <span class="dft-komentar">
        <a href="?page=beritaedit&id=<?php echo $data['kdberita']; ?>" class="btn btn-primary">Edit</a>
      </span>
      </center>
    </td>
    <td>
      <center>
      <span class="dft-komentar">
        <a href="?page=beritadel&id=<?php echo $data['kdberita']; ?>" class="btn btn-danger">Delete</a>
      </span>
      </center>
    </td>
  </tr><?php $no++; } ?>
</table>
 <ul class="pagination">
   <?php
   $paging = paging_admin("berita",$batas,$hal,"index.php?page=berita&");
   echo $paging;
   ?>
 </ul>
