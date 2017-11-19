<?php


if ($_GET){
	if (isset($_POST['simpan'])){
	$a=buatkode('produk','PR');
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$g=$_FILES['g']['name'];
	$h=$_POST['h'];
	$i=$_POST['i'];
	$j=$_POST['j'];
	
	if ($j<>""){
	
	
	if (is_uploaded_file($_FILES['g']['tmp_name'])){
	move_uploaded_file($_FILES['g']['tmp_name'], "gambar/".$g);
	}
	
	if ($g<>""){
	$sql="update produk set nama='$b',  kategori='$c', merk='$h', vendor='$i', tipe='$j', harga='$d', stok='$e', ket='$f', gambar='$g' where kdpro='".$_GET['kd']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	}else{
	$sql="update produk set nama='$b',  kategori='$c', merk='$h', vendor='$i', tipe='$j', harga='$d', stok='$e', ket='$f' where kdpro='".$_GET['kd']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	}
	echo '<meta http-equiv="refresh" content="0; url=?page=produk">';
	}else{
	echo "isi data dengan lengkap";
	}
	}
	}

$tampil=mysql_query("select * from produk where kdpro='".$_GET['kd']."'") or die (mysql_error());
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
      <input class="form-control" required type="text" name="a" id="a" value="<?php echo $data['kdpro']; ?>">
    </label></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input class="form-control" required type="text" name="b" id="b" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td>:</td>
    <td><select class="form-control" required name="c" id="c" >
<?php
$ka=mysql_query("select * from kategori ") or die (mysql_error());
while($kate=mysql_fetch_array($ka)){
?>
        <option value="<?php echo $kate['kode'] ?>"><?php echo $kate['kategori'] ?></option>
<?php } ?>  
      </select></td>
  </tr>
  <tr>
    <td>Merk</td>
    <td>:</td>
    <td><input class="form-control" required type="text" name="h" id="d2" value="<?php echo $data['merk']; ?>" /></td>
  </tr>
  <tr>
    <td>Vendor</td>
    <td>:</td>
    <td><input class="form-control" required type="text" name="i" id="d3" value="<?php echo $data['vendor']; ?>" /></td>
  </tr>
  <tr>
    <td>Tipe</td>
    <td>:</td>
    <td><input class="form-control" required type="text" name="j" id="d4" value="<?php echo $data['tipe']; ?>" /></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td>:</td>
    <td><input class="form-control" required type="number" name="d" id="d" value="<?php echo $data['harga']; ?>"></td>
  </tr>
  <tr>
    <td>Stok</td>
    <td>:</td>
    <td><input class="form-control" required type="number" name="e" id="e" value="<?php echo $data['stok']; ?>"></td>
  </tr>
  <tr>
    <td>Ket</td>
    <td>:</td>
    <td><textarea class="form-control" name="f" id="f" ><?php echo $data['ket']; ?></textarea></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td>:</td>
    <td><input class="form-control" required type="file" name="g" id="g"></td>
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


