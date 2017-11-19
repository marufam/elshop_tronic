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
	if ($g<>""){
	
	
	if (is_uploaded_file($_FILES['g']['tmp_name'])){
	move_uploaded_file($_FILES['g']['tmp_name'], "gambar/".$g);
	}
	$sql="insert into produk(kdpro, nama, kategori, merk, vendor, tipe, harga, stok, ket, gambar, count) values('$a','$b','$c','$h','$i','$j','$d','$e','$f','$g',0)";
	$masuk=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=produk">';
	}else{
	echo "isi data dengan lengkap";
	}
	}
	}
	
?>
