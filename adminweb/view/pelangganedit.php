<?php


if ($_GET){
	if (isset($_POST['simpan'])){
	$a=buatkode('pelanggan','PL');
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$g=$_POST['g'];
	
	if ($g<>""){
	
	
	
	$sql="update pelanggan set nama='$b', alamat='$c', email='$d', username='$e', password='$f', status='$g' where kdpel='".$_GET['kd']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=pelanggan">';
	}else{
	echo "isi data dengan lengkap";
	}
	}
	}

$tampil=mysql_query("select * from pelanggan where kdpel='".$_GET['kd']."'") or die (mysql_error());
$data=mysql_fetch_array($tampil);
?>

 <form method="post" enctype="multipart/form-data" >
<table width="282" border="0" class="table">
  <tr>
    <td colspan="3">Produk</td>
  </tr>
  <tr>
    <td width="59">Kode</td>
    <td width="3">:</td>
    <td width="206"><label>
      <input type="text" class="form-control" required name="a" id="a" value="<?php echo $data['kdpel']; ?>">
    </label></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" class="form-control" required name="b" id="b" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="c" id="c" class="form-control" required value="<?php echo $data['alamat']; ?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="email" class="form-control" required name="d" id="d" value="<?php echo $data['email']; ?>"></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" class="form-control" required name="e" id="e" value="<?php echo $data['username']; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" class="form-control" required name="f" id="f" value="<?php echo $data['password']; ?>"></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td></label>
      <label>
      <select name="g" id="g" class="form-control" required>
        <option>Tidak</option>
        <option>Ya</option>
      </select>
      </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> <input type="submit" class="btn btn-primary" name="simpan" id="button" value="Simpan">&nbsp;</td>
  </tr>
</table>
</form>


