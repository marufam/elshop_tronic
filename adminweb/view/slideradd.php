<?php


if ($_GET){
	if (isset($_POST['simpan'])){
	$a=buatkode('slider','SL');

	$c=$_POST['c'];
	$b=$_FILES['b']['name'];

	if ($b<>""){
	
	
	if (is_uploaded_file($_FILES['b']['tmp_name'])){
	move_uploaded_file($_FILES['b']['tmp_name'], "slider/".$b);
	}
	$sql="insert into slider values('$a','$b','$c')";
	$masuk=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=slider">';
	}else{
	echo "isi data dengan lengkap";
	}
	}
	}
	
?>
