<?php
/**
 * Created by PhpStorm.
 * User: Maruf
 * Date: 23/12/2015
 * Time: 21:30
 */
if(isset($_GET['kd'])){
    $kd=$_GET['kd'];
    $jumlah=$_GET['jumlah'];
    $tambah="UPDATE produk set stok=stok+'$jumlah' WHERE kdpro='$kd'";
    $mtambah=mysql_query($tambah) or die(mysql_error());
    $sql="delete from penjualan_tmp where kdpel='$_SESSION[pel]' and kdpro='$kd'";
    $del=mysql_query($sql) or die(mysql_error());
    if($del){
        echo '<meta http-equiv="refresh" content="0; url=index.php?page=cart">';
    }
}
?>