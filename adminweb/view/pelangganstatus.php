 <?php
if ($_GET){
$d=$_GET['st'];
$df=mysql_query("select * from pelanggan where kdpel='$d'") or die (mysql_error());
$tr=mysql_fetch_array($df);
if ($tr['status']<>"Tidak"){

	$sql="update pelanggan set status='Tidak' where kdpel='".$_GET['st']."'";
	$rf=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=pelanggan">';
}else{
	$sql="update pelanggan set status='Ya' where kdpel='".$_GET['st']."'";
	$rf=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=pelanggan">';
}
}
?>