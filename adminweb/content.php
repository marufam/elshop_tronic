<?php
/**
 * Created by PhpStorm.
 * User: Maruf
 * Date: 09/12/2015
 * Time: 11:15
 */
if(isset($_SESSION['username'])) {
    if (isset($_GET['page'])) {
        if (file_exists("view/" . $_GET['page'] . ".php")) {
            include "view/" . $_GET['page'] . ".php";
        } else {
            echo "Halaman Tidak ditemukan";
        }
    } else {
        include "view/welcome.php";
    }
}else{
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}
?>

