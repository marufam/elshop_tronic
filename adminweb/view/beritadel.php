 <?php 

if ($_GET){
	$a=$_GET['id'];
	$sql="delete from berita where kdberita='$a'";
	$del=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=berita">';
	
}

?>