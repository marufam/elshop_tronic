<?php 
if(isset($_POST['save'])){

$a=$_POST['kat'];

if($a!=''){
$sql="insert into kategori values('NULL','$a')";
$mas=mysql_query($sql) or die (mysql_error());
echo '<meta http-equiv="refresh" content="0; url=?page=kategori">';
	}else{
	echo "Isi data dengan lengkap";
	}
	
}

?>

 <form enctype="multipart/form-data" method="post">
<table width="307" border="0">
  <tr>
    <td width="137">Kategori</td>
    <td width="10">:</td>
    <td width="149"><input name="kat" type="text" class="form-control" required id="kat"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br><input type="submit" class="btn btn-primary" name="save" value="Simpan"></td>
  </tr>
</table>
</form>