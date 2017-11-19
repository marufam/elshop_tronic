 <?php
if ($_GET){
$d=$_GET['st'];
$df=mysql_query("select * from contact where kdkontak='$d'") or die (mysql_error());
$tr=mysql_fetch_array($df);
if ($tr['status']!=0){

	$sql="update contact set status='0' where kdkontak='".$_GET['st']."'";
	$rf=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=contact">';
}else{
	$sql="update contact set status='1' where kdkontak='".$_GET['st']."'";
	$rf=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=contact">';
}
}
?>