<?php 
$sql=mysql_query("select * from penjualan where nojual='".$_GET['kd']."'") or die(mysql_error());
$data=mysql_fetch_array($sql);
?>
 <form enctype="multipart/form-data" method="post">
<img height="300px" width="300px" src="gamrek/<?php echo $data['gambar']; ?>" ><br>
<input type="submit" class="btn btn-primary" name="konfirm" value="Konfirm">
</form>

<?php if(isset($_POST['konfirm'])){
$sql1="update penjualan set status='Lunas' where nojual='".$_GET['kd']."'";
$kj=mysql_query($sql1) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=penjualan">';
	}
 ?>