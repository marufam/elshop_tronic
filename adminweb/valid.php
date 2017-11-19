 <?php
include "koneksi.php";

$a=$_POST['a'];
$b=$_POST['b'];



$sql=mysql_query("select * from admin where username='$a' and password='$b' ") or die (mysql_error());
$ketemu=mysql_num_rows($sql);
$data=mysql_fetch_array($sql);


if ($ketemu > 0){


	session_start();
	$_SESSION['username']=$data['username'];
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
}else{
	echo "<script>alert('cobalagi');</script>";
	echo '<meta http-equiv="refresh" content="0; url=login.php">';
}
?>
