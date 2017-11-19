<?php


if ($_GET){
	if (isset($_POST['simpan'])){

	$b=$_POST['b'];
	
	
	if ($b<>""){
	
	
	
	$sql="update admin set password='$b' where username='".$_SESSION['username']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=admin">';
	echo "<script>alert('sukses diubah');</script>";
	}else{
	echo "isi data dengan lengkap";
	}
	}
	}

?>

<form method="post" enctype="multipart/form-data">
<table width="282" border="0">
  <tr>
    <td colspan="3"><div align="center">Ganti Password</div></td>
  </tr>
  <tr>
    <td width="59">Password</td>
    <td width="3">:</td>
    <td width="206"><input class="form-control" required type="text" name="b" id="b" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br> <input type="submit" class="btn btn-primary" name="simpan" id="button" value="Simpan">&nbsp;</td>
  </tr>
</table>
 </form>


