<?php


if ($_GET){
	if (isset($_POST['simpan'])){

	$b=$_POST['b'];
	$c=$_POST['c'];


      if ($b <> "" and $c <> "") {

	

	$sql="update admin set username='$b',  password='$c'where id='".$_GET['kd']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	}
	echo '<meta http-equiv="refresh" content="0; url=?page=pengguna">';
	}else{
	echo "isi data dengan lengkap";
	}
	}

$tampil=mysql_query("select * from admin where id='".$_GET['kd']."'") or die (mysql_error());
$data=mysql_fetch_array($tampil);
?>

 <form method="post" enctype="multipart/form-data" >
<table width="282" border="0" class="table">
  <tr>
    <td colspan="3">Pengguna</td>
  </tr>
  <tr>
    <td width="59">Id</td>
    <td width="3">:</td>
    <td width="206"><label>
      <input class="form-control" required type="text" name="a" id="a" value="<?php echo $data['id']; ?>">
    </label></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input class="form-control" required type="text" name="b"  value="<?php echo $data['username']; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input class="form-control" required type="password" name="c"  value="<?php echo $data['password']; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
      <input class="btn btn-primary" type="submit" name="simpan" id="button" value="Simpan">
    </label></td>
  </tr>
</table>
</form>


