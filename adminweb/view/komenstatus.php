 <?php
if ($_GET){
$d=$_GET['st'];
$df=mysql_query("select * from komentar where id='$d'") or die (mysql_error());
$tr=mysql_fetch_array($df);
if ($tr['status']<>"Tidak"){

	$sql="update komentar set status='Tidak' where id='".$_GET['st']."'";
	$rf=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=komentar">';
}else{
	$sql="update komentar set status='Ya' where id='".$_GET['st']."'";
	$rf=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=komentar">';
}
}
?>