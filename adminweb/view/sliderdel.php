<?php

if ($_GET){
	$a=$_GET['kd'];
	
	$sql="delete from slider where kdslider='$a'";
	$del=mysql_query($sql) or die (mysql_error());
echo '<meta http-equiv="refresh" content="0; url=?page=slider">';
}
?>